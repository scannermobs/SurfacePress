<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<div id="content" class="content" data-tpl="archive">

	<?php //get_sidebar(); ?>

	<main class="main" role="main">

		<header class="grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<h1 class="page-title"><?php the_archive_title();?></h1>

					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>

				</div>

			</div>

		</header>

		<div class="grid-container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'archive-grid-auto' ); ?>

			<?php endwhile; ?>

				<?php joints_page_navi(); ?>

			<?php else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>

		</div>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
