<?php
/**
 * The main template file.
 *
 * @package ClearWaterProwash
 */

get_header();
?>

<div class="container standard-page-layout">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'standard-article' ); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
	else :
		?>
		<p><?php esc_html_e( 'No content found.', 'clearwater-prowash' ); ?></p>
	<?php
	endif;
	?>
</div>

<?php
get_footer();