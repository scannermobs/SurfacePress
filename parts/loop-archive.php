<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" data-tpl="loop-archive">

	<a href="<?php echo get_the_permalink(); ?>" class="grid-x grid-padding-x" title="<?php the_title_attribute(); ?>" rel="bookmark">

	<div class="auto cell text">

		<p class="h4"><?php the_title(); ?></p>

		<?php //get_template_part( 'parts/content', 'byline' ); ?>

		<?php echo wpautop(wp_trim_words( get_the_excerpt(), 15 )); ?>

	</div>

	<?php if(get_the_post_thumbnail()): ?>

	<div class="small-3 medium-2 cell">

		<figure>
			<?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
		</figure>

	</div>

<?php endif; ?>

</a>

</article>
