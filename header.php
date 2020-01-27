<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- Open Graph - edit as needed -->
		<?php if(is_front_page()): ?>
			<meta property="og:title" content="<?php echo get_bloginfo('name'); ?>" />
		<?php else: ?>
			<meta property="og:title" content="<?php echo get_the_title(); ?>" />
		<?php endif; ?>
		<meta property="og:type" content="website" />
		<?php if(has_post_thumbnail()): ?>
			<meta property="og:image" content="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" />
		<?php endif; ?>
		<meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
		<?php if(!is_front_page() && $post->post_content): ?>
			<meta property="og:description" content="<?php echo wp_trim_words( $post->post_content, 40, '...' ); ?>" />
		<?php else: ?>
			<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
		<?php endif; ?>
		<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
		<meta name="twitter:card" content="summary" />
		<!-- <meta name="twitter:site" content="@example" /> -->
		<!-- <meta name="twitter:creator" content="@msexample" /> -->
		<!-- <meta property="fb:admins" content="USER_ID"/> -->


		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- To customise manually, use realfavicongenerator.net or similar -->
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
			<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
			<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
			<meta name="msapplication-TileColor" content="#da532c">
			<meta name="theme-color" content="#ffffff">
		<?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
		<script>
		window.addEventListener("load", function(){
		window.cookieconsent.initialise({
		  "palette": {
		    "popup": {
		      "background": "#efefef",
		      "text": "#404040"
		    },
		    "button": {
		      "background": "#8ec760",
		      "text": "#ffffff"
		    }
		  },
		  "position": "bottom-right",
		  "content": {
		    "message": "This website uses cookies to ensure you get the best experience whilst using it.",
		    "dismiss": "OK, thanks!",
		    "link": "More about cookies"
		  }
		})});
		</script>

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

				<header id="header" class="header" role="banner">

					 <!-- This nav will be applied to the topbar, above all content. To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'default' ); ?>

				</header> <!-- end .header -->
