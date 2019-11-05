<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div id="top-bar-menu" class="top-bar grid-container" data-tpl="nav-offcanvas">

	<div class="top-bar-left">

		<ul id="site-branding" class="menu">

			<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>

		</ul>

	</div>

	<div class="top-bar-right">

		<ul class="menu">

			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->

			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>

		</ul>

	</div>

</div>
