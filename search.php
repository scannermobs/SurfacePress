<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

<div id="content" class="content" data-tpl="search">

	<main class="main" role="main">

		<header class="grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<h1 class="archive-title"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>

				</div>

			</div>

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

	<?php //get_sidebar(); ?>

</div> <!-- end #content -->

<?php get_footer(); ?>
