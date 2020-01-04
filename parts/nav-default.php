<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>" data-tpl="nav-header">

	<ul id="mobile-branding">

		<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>

	</ul>

	<div id="mobile-menu-button" class="mobile-menu" data-toggle>

		<div class="closed">

			<span class="menu-label"><?php _e( 'Menu &nbsp;', 'jointswp' ); ?></span>

			<i class="fas fa-bars"></i>

		</div>

		<div class="opened hide">

			<span class="menu-label">Close &nbsp;</span>

			<i class="fas fa-times"></i>

		</div>

	</div>

</div>

<div id="top-bar-menu" class="grid-container" data-tpl="nav-header">

	<div class="grid-x grid-margin-x grid-padding-x">

		<div class="cell small-6 show-for-<?php echo $breakpoint ?>">

			<ul id="main-branding" class="menu">

				<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>

			</ul>

		</div>

		<div id="utility-nav" class="utility-nav cell auto">

			<ul class="cell menu" role="menubar">

				<li role="menuitem"><a href="">Accessibility</a></li>

				<li role="menuitem"><a href="">Log in</a></li>

			</ul>

		</div>

		<div class="cell small-12">

			<?php joints_top_nav(); ?>

		</div>

	</div>

</div>
