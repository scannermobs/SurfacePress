<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div id="content" class="content" data-tpl="single">

	<?php //get_sidebar(); ?>

	<main class="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'single' ); ?>

		<?php endwhile; else : ?>

			<?php get_template_part( 'parts/content', 'missing' ); ?>

		<?php endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
