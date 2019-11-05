<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage" data-tpl="loop-page">

	<header class="article-header grid-container">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<h1 class="page-title"><?php the_title(); ?></h1>

			</div>

		</div>

	</header> <!-- end article header -->

	<section class="entry-content grid-container" itemprop="text">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<?php the_content(); ?>

			</div>

		</div>

	</section> <!-- end article section -->

	<footer class="article-footer grid-container">

		<div class="grid-x grid-margin-x grid-padding-x">

			<div class="small-12 medium-12 large-12 cell">

				<?php wp_link_pages(); ?>

			</div>

		</div>

	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
