# Clear Water Prowash - Website Redesign & Optimization

**Live Interactive Demo:** https://clearwater-iota.vercel.app

## The Backstory: Why I Built This
I built this custom WordPress theme as a proactive redesign for a local exterior cleaning business (Clear Water Prowash in Columbus, OH). Their original website was suffering from outdated SEO practices, slow loading speeds, and a frustrating user experience that was likely costing them potential leads. 

Instead of just suggesting changes, I took the initiative to build a fully functional, high-performing prototype from scratch to demonstrate how a modern web architecture directly improves business conversion rates.

## The Problems with the Original Site
Upon auditing the original live website, I identified several critical issues:
1. **Performance Lag:** The site was bogged down by heavy, render-blocking scripts and unoptimized media, causing slow load times on mobile devices.
2. **Outdated SEO (Keyword Stuffing):** The main navigation contained a dropdown menu repeating the word "Power Washing" for 20+ different cities. Modern Google algorithms penalize this as "doorway page" spam.
3. **Conversion Friction:** Potential customers were forced to fill out an intimidating 9-step contact form just to request a quote.
4. **Buried Social Proof:** The company has an incredible 5.0-star rating with over 180 reviews, but this trust-building data was hidden deep in sub-pages.

## The Solution & Technical Approach
I developed a completely custom WordPress theme (`front-page.php`, `functions.php`, `style.css`) using a Mobile-First, Zero-Bloat methodology. 

Instead of relying on heavy visual page builders (like Elementor or Divi), I hard-coded the layouts using semantic HTML, modern CSS Grid/Flexbox, and pure Vanilla JavaScript. 

### Key Features & Business Improvements:
* **Friction-Free Lead Generation:** I scrapped the 9-step form and built a clean, 4-step AJAX-powered quote simulator, alongside a sticky "Text to Quote" mobile button to capture users on smartphones.
* **Modern Local SEO:** I removed the spammy navigation menu and replaced it with invisible LocalBusiness JSON-LD Schema markup. This tells Google exactly what cities the business serves without ruining the human user experience.
* **Vanilla JS Interactivity:** I built a custom, draggable "Before & After" image comparison slider and a dynamic review carousel using pure JavaScript—achieving the interactive feel of a modern app without the heavy payload of jQuery or third-party plugins.
* **Front-and-Center Social Proof:** Reorganized the visual hierarchy so verified Google reviews and Angie's List awards are the first things a user sees.

## About This Repository & Demo
* **The Code:** This repository contains the raw, custom WordPress PHP theme files I developed.
* **The Live Demo:** To make the site instantly viewable for the client without needing a backend PHP server, I compiled the WordPress theme into static HTML/CSS/JS and deployed it to the Edge via Vercel. 
* **Note on the Quote Form:** Because the live demo is hosted statically on Vercel (without the WordPress PHP engine), the quote form is set to "Demo Mode." It simulates the loading state and triggers a JavaScript alert to demonstrate the UX, rather than actually sending an email payload.

## Tech Stack
* **Architecture:** Custom WordPress Theme (PHP)
* **Styling:** CSS3 (CSS Grid, Flexbox, Custom Properties)
* **Scripting:** Vanilla JavaScript (ES6+)
* **SEO:** Semantic HTML5, JSON-LD Structured Data
* **Deployment:** LocalWP (Development), Vercel (Static Demo Hosting)
