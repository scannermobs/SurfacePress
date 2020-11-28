<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('listing-item grid-x grid-margin-x grid-padding-x'); ?> role="article" data-tpl="loop-archive">

	<div class="cell">

		<div class="grid-x grid-padding-x grid-margin-x">

			<div class="cell">

				<a href="<?php echo get_the_permalink(); ?>" class="grid-x grid-padding-x" title="<?php the_title_attribute(); ?>" rel="bookmark">

					<div class="auto cell">

						<header>
							<p class="h4 title"><?php the_title(); ?></p>
							<?php //get_template_part( 'parts/content', 'byline' ); ?>
						</header>

						<section class="entry-content" itemprop="text">
							<?php echo wpautop(wp_trim_words( get_the_excerpt(), 15 )); ?>
							<span class="button">Read more</span>
						</section>

					</div>

					<?php if(get_the_post_thumbnail()): ?>

					<div class="small-3 medium-2 cell">

						<figure>
							<?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
						</figure>

					</div>

				<?php endif; ?>

				</a>

			</div>

		</div>

	</div>

</article>
