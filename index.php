<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<div id="content" class="content grid-container" data-tpl="index">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<?php get_sidebar(); ?>

	    <main class="main small-12 medium-8 large-8 cell" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive' ); ?>

			<?php endwhile; ?>

				<?php joints_page_navi(); ?>

			<?php else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>

	    </main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
