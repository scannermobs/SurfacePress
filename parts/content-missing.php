<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<div class="post-not-found">

	<?php if ( is_search() ) : ?>

		<header class="article-header grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<h1><?php _e( 'Sorry, No Results.', 'jointswp' );?></h1>

				</div>

			</div>

		</header>

		<section class="entry-content grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<p><?php _e( 'Try your search again.', 'jointswp' );?></p>

				</div>

			</div>

		</section>

		<section class="search grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<p><?php get_search_form(); ?></p>

				</div>

			</div>

		</section> <!-- end search section -->

		<footer class="article-footer grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'jointswp' ); ?></p>

				</div>

			</div>

		</footer>

	<?php else: ?>

		<header class="article-header grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<h1><?php _e( 'Oops, Post Not Found!', 'jointswp' ); ?></h1>

				</div>

			</div>

		</header>

		<section class="entry-content grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'jointswp' ); ?></p>

				</div>

			</div>

		</section>

		<section class="search grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<p><?php get_search_form(); ?></p>

				</div>

			</div>

		</section> <!-- end search section -->

		<footer class="article-footer grid-container">

			<div class="grid-x grid-margin-x grid-padding-x">

				<div class="small-12 medium-12 large-12 cell">

					<p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'jointswp' ); ?></p>

				</div>

			</div>
			
		</footer>

	<?php endif; ?>

</div>
