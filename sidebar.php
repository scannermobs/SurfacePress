<?php
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar" class="sidebar sidebar1 small-12 medium-4 large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php endif; ?>

</div>
