<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');

add_action('wp_head', 'fouc_protect_against');
/**
 * Combat FOUC in WordPress
 * @link https://stackoverflow.com/questions/3221561/eliminate-flash-of-unstyled-content
 */
function fouc_protect_against () {
?>
	<script>
		jQuery('html').addClass('show-for-sr')
		jQuery(document).ready(function($){
			$('html').removeClass('show-for-sr')
		})
	</script>
<?php
}

// ACF options page in wp admin menu
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Change text to leave a reply on comment form
function isa_comment_reform ($arg) {
$arg['title_reply'] = __('What do you think about this?');
return $arg;
}
add_filter('comment_form_defaults','isa_comment_reform');

// Remove archive title prefix
function hide_the_archive_title_prefix( $title ) {
	$title_parts = explode( ': ', $title, 2 );
	if ( ! empty( $title_parts[1] ) ) {
		$title = wp_kses(
			$title_parts[1],
			array(
				'span' => array(
					'class' => array(),
				),
			)
		);
		$title = '<span class="show-for-sr">' . esc_html( $title_parts[0] ) . ': </span>' . $title;
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'hide_the_archive_title_prefix' );

// Woo support
// function mytheme_add_woocommerce_support() {
// 	add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Meta description
function custom_meta_description() {
	global $post;
	if ( is_singular() ) {
		$desc_post = strip_tags( $post->post_content );
		$desc_post = wp_strip_all_tags( $desc_post, true );
		$desc_post = str_replace( array("\n", "\r", "\t"), ' ', $desc_post );
		$desc_post = mb_substr( $desc_post, 0, 160, 'utf8' );
		echo '<meta name="description" content="' . $desc_post . '" />' . "\n";
	}
	if ( is_home() ) {
		echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
	}
	if ( is_category() ) {
		$desc_cat = strip_tags(category_description());
		echo '<meta name="description" content="' . $desc_cat . '" />' . "\n";
	}
}
add_action( 'wp_head', 'custom_meta_description');
