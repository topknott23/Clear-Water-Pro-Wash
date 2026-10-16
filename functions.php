<?php
/**
 * Clear Water Prowash Theme Functions
 *
 * @package ClearWaterProwash
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'CLEARWATER_THEME_VERSION', '2.5.0' );
define( 'CLEARWATER_THEME_DIR', get_template_directory() );
define( 'CLEARWATER_THEME_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function clearwater_theme_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Support responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Custom logo support.
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 280,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// HTML5 markup support.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Register Navigation Menus.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'clearwater-prowash' ),
		'footer'  => __( 'Footer Navigation', 'clearwater-prowash' ),
	) );
}
add_action( 'after_setup_theme', 'clearwater_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function clearwater_enqueue_scripts() {
	// Google Fonts: Plus Jakarta Sans
	wp_enqueue_style(
		'clearwater-google-fonts',
		'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	// Theme base stylesheet (style.css)
	wp_enqueue_style(
		'clearwater-style',
		get_stylesheet_uri(),
		array(),
		CLEARWATER_THEME_VERSION
	);

	// Main structured CSS
	$css_file = CLEARWATER_THEME_DIR . '/assets/css/main.css';
	$css_ver  = file_exists( $css_file ) ? filemtime( $css_file ) : CLEARWATER_THEME_VERSION;
	wp_enqueue_style(
		'clearwater-main',
		CLEARWATER_THEME_URI . '/assets/css/main.css',
		array( 'clearwater-style' ),
		$css_ver
	);

	// Vanilla JavaScript
	$js_file = CLEARWATER_THEME_DIR . '/assets/js/main.js';
	$js_ver  = file_exists( $js_file ) ? filemtime( $js_file ) : CLEARWATER_THEME_VERSION;
	wp_enqueue_script(
		'clearwater-main-js',
		CLEARWATER_THEME_URI . '/assets/js/main.js',
		array(),
		$js_ver,
		true // in footer
	);

	// Localize script for AJAX quote handling
	wp_localize_script(
		'clearwater-main-js',
		'clearwaterSettings',
		array(
			'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
			'quoteNonce' => wp_create_nonce( 'clearwater_quote_action' ),
			'phone'      => '(614) 425-9395',
			'phoneClean' => '6144259395',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'clearwater_enqueue_scripts' );

/**
 * Handle Friction-Free Quick Quote AJAX Submission
 */
function clearwater_handle_quote_submit() {
	check_ajax_referer( 'clearwater_quote_action', 'nonce' );

	$name    = isset( $_POST['fullname'] ) ? sanitize_text_field( wp_unslash( $_POST['fullname'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$address = isset( $_POST['address'] ) ? sanitize_text_field( wp_unslash( $_POST['address'] ) ) : '';

	// Process multiple selected services or fallback to single service
	$services = array();
	if ( isset( $_POST['services'] ) && is_array( $_POST['services'] ) ) {
		$services = array_map( 'sanitize_text_field', wp_unslash( $_POST['services'] ) );
	} elseif ( isset( $_POST['service'] ) && ! empty( $_POST['service'] ) ) {
		$services[] = sanitize_text_field( wp_unslash( $_POST['service'] ) );
	}
	$service_summary = ! empty( $services ) ? implode( ', ', $services ) : 'Not Specified';

	if ( empty( $name ) || empty( $phone ) ) {
		wp_send_json_error( array(
			'message' => __( 'Please provide your name and phone number so we can send your quote.', 'clearwater-prowash' ),
		) );
	}

	// Prepare notification email to business owner (Clear Water Prowash Team)
	$to      = get_option( 'admin_email' );
	$subject = sprintf( '[New Quote Request] %s - %s', $service_summary, $name );
	$message = "You have received a new quote request from the Clear Water Prowash website:\n\n";
	$message .= "Name: " . $name . "\n";
	$message .= "Phone: " . $phone . "\n";
	$message .= "Services Requested:\n";
	if ( ! empty( $services ) ) {
		foreach ( $services as $s ) {
			$message .= "  • " . $s . "\n";
		}
	} else {
		$message .= "  • Not Specified\n";
	}
	$message .= "\nProperty Address / Zip: " . ( $address ? $address : 'Not Specified' ) . "\n";
	$message .= "Date: " . current_time( 'mysql' ) . "\n\n";
	$message .= "Call or Text Back: " . $phone . "\n";

	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );

	@wp_mail( $to, $subject, $message, $headers );

	wp_send_json_success( array(
		'message' => sprintf(
			__( 'Thank you, %s! Our team has received your request for: %s. We will inspect your property virtually and text/call you an upfront price within 60 minutes.', 'clearwater-prowash' ),
			esc_html( $name ),
			esc_html( $service_summary )
		),
		'name'     => $name,
		'services' => $services,
	) );
}
add_action( 'wp_ajax_clearwater_quote_submit', 'clearwater_handle_quote_submit' );
add_action( 'wp_ajax_nopriv_clearwater_quote_submit', 'clearwater_handle_quote_submit' );
