<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" data-tpl="loop-single">

	<header class="article-header grid-container">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

				<?php get_template_part( 'parts/content', 'byline' ); ?>

			</div>

		</div>

	</header> <!-- end article header -->

	<section class="entry-content grid-container" itemprop="text">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<?php the_post_thumbnail('full'); ?>

				<?php the_content(); ?>

			</div>

		</div>

	</section> <!-- end article section -->

	<footer class="article-footer grid-container">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>

				<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>

			</div>

		</div>

	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
