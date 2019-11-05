<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" data-tpl="loop-archive">

	<header class="article-header grid-container">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<?php get_template_part( 'parts/content', 'byline' ); ?>

			</div>

		</div>

	</header> <!-- end article header -->

	<section class="entry-content grid-container" itemprop="text">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>

				<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>

			</div>

		</div>

	</section> <!-- end article section -->

	<footer class="article-footer grid-container">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>

			</div>

		</div>

	</footer> <!-- end article footer -->

</article> <!-- end article -->
