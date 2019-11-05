<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

<div id="content" class="content" data-tpl="404">

	<main class="main" role="main">

		<article class="content-not-found">

			<header class="article-header grid-container">

				<div class="grid-x grid-margin-x grid-padding-x">

					<div class="small-12 medium-12 large-12 cell">

						<h1><?php _e( 'Sorry - Page Not Found', 'jointswp' ); ?></h1>

					</div>

				</div>

			</header> <!-- end article header -->

			<section class="entry-content grid-container">

				<div class="grid-x grid-margin-x grid-padding-x">

					<div class="small-12 medium-12 large-12 cell">

						<p><?php _e( 'The page was not found, but maybe try looking again!', 'jointswp' ); ?></p>

					</div>

				</div>

			</section> <!-- end article section -->

			<section class="search grid-container">

				<div class="grid-x grid-margin-x grid-padding-x">

					<div class="small-12 medium-12 large-12 cell">

						<p><?php get_search_form(); ?></p>

					</div>

				</div>

			</section> <!-- end search section -->

		</article> <!-- end article -->

	</main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
