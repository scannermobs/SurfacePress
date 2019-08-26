<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div id="content" class="content grid-container" data-tpl="single">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<?php get_sidebar(); ?>

		<main class="main small-12 medium-8 large-8 cell" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'single' ); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>