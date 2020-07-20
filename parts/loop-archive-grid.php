<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

// Adjust the amount of rows in the grid
$grid_columns = 2; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

	<div class="grid-x grid-margin-x grid-padding-x archive-grid" data-equalizer>

<?php endif; ?>

		<div class="small-12 medium-6 cell panel" data-equalizer-watch>

			<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item listing-item'); ?> role="article" data-tpl="loop-archive-grid">

				<a href="<?php echo get_the_permalink(); ?>" class="" title="<?php the_title_attribute(); ?>" rel="bookmark">

					<section class="featured-image" itemprop="text">
						<?php the_post_thumbnail('full'); ?>
					</section>

					<br>

					<header class="article-header">
						<h3 class="title"><?php the_title(); ?></h3>
						<?php //get_template_part( 'parts/content', 'byline' ); ?>
					</header>

					<section class="entry-content" itemprop="text">
						<?php echo wpautop(wp_trim_words( get_the_excerpt(), 15 )); ?><span class="button">Read more</span>
						<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
					</section>

				</a>

			</article>

		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

	</div>

<?php endif; ?>
