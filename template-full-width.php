<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>

<div id="content" class="content" data-tpl="template-full-width">

	<main class="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'page' ); ?>

		<?php endwhile; endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
