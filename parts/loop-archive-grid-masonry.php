<?php
/**
 * A custom template for use with Masonry
 * https://github.com/desandro/masonry
 */
?>

<?php if( 0 === $wp_query->current_post ): ?>

<div class="grid-x" data-msnry>

<?php endif; ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item listing-item cell medium-6 large-4'); ?> role="article" data-tpl="loop-archive-grid-masonry">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="cell">

				<a href="<?php echo get_the_permalink(); ?>" class="" title="<?php the_title_attribute(); ?>" rel="bookmark">

					<figure>
						<?php the_post_thumbnail('medium'); ?>
					</figure>

					<br>

					<header>
						<p class="h4 title"><?php the_title(); ?></p>
						<?php //get_template_part( 'parts/content', 'byline' ); ?>
					</header>

					<section class="entry-content" itemprop="text">
						<?php echo wpautop(wp_trim_words( get_the_excerpt(), 15 )); ?>
						<span class="button">Read more</span>
					</section>

				</a>

			</div>

		</div>

	</article>

<?php if( ($wp_query->current_post + 1) === $wp_query->post_count ): ?>

</div>

<?php endif; ?>
