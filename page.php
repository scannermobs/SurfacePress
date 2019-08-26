<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<div id="content" class="content grid-container" data-tpl="page">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<?php //get_sidebar(); ?>

	    <main class="main small-12 medium-auto cell" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'page' ); ?>

		    <?php endwhile; endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
