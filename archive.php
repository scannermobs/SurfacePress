<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<div id="content" class="content grid-container" data-tpl="archive">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<?php get_sidebar(); ?>

	    <main class="main small-12 medium-8 large-8 cell" role="main">

	    	<header>
	    		<h1 class="page-title"><?php the_archive_title();?></h1>
				<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
	    	</header>

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
