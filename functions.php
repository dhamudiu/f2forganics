<?php
// Theme support
function f2forganics_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'woocommerce' );
	register_nav_menu( 'primary', 'Primary Menu' );
	register_nav_menu( 'secondary', 'Secondary Menu' );
}
add_action( 'after_setup_theme', 'f2forganics_setup' );

// Enqueue styles & scripts
function f2forganics_scripts() {
	wp_enqueue_style( 'f2forganics-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'f2forganics_scripts' );

function f2forganics_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'f2forganics_add_woocommerce_support' );

if ( ! defined( 'F2FORGANICS_ASSETS' ) ) {
	define( 'F2FORGANICS_ASSETS', get_template_directory_uri() . '/assets' );
}

class My_Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	// Open submenu <ul>
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= "\n<ul class=\"sub-menu\">\n";
	}

	// Start menu item
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = empty( $item->classes ) ? [] : (array) $item->classes;

		if ( in_array( 'current-menu-item', $classes ) ) {
			$classes[] = 'active-menu';
		}

		$class_names = join( ' ', array_filter( $classes ) );
		$class_attr  = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "<li$class_attr>";
		$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
	}

	// End menu item
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= "</li>\n";
	}
}

class My_Custom_Walker_Nav_Menu2 extends Walker_Nav_Menu {
	// Open submenu <ul>
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= "\n<ul class=\"sub-menu sub-menu-m\">\n";
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= "</ul>\n";
		$output .= "\n<span class=\"arrow-main-menu-m\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span>\n";
	}

	// Start menu item
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = array();

		if ( in_array( 'current-menu-item', $classes ) ) {
			$classes[] = 'active-menu';
		}

		$class_names = join( ' ', array_filter( $classes ) );
		$class_attr  = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "<li$class_attr>";
		$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
	}

	// End menu item
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= "</li>\n";
	}
}


// Add specific CSS class by filter.
add_filter(
	'body_class',
	function ($classes) {
		global $ishome;

		$custom_classes = array( 'animation' );

		if ( isset( $ishome ) && true === $ishome ) {
			$custom_classes[] = 'home-page';
		}

		return array_merge( $classes, $custom_classes );
	}
);

// Open wrapper
function mytheme_wc_wrapper_start() {
	echo '<div class="container"><main id="main" class="site-main">';
}
add_action( 'woocommerce_before_main_content', 'mytheme_wc_wrapper_start', 10 );

// Close wrapper
function mytheme_wc_wrapper_end() {
	echo '</main></div>';
}
add_action( 'woocommerce_after_main_content', 'mytheme_wc_wrapper_end', 10 );


// Add checkbox field to product category add/edit forms
function add_homepage_category_checkbox( $term ) {
	$checked = get_term_meta( $term->term_id, 'show_on_homepage', true );
	?>
	<tr class="form-field">
		<th scope="row"><label for="show_on_homepage">Show on Homepage?</label></th>
		<td>
			<input type="checkbox" name="show_on_homepage" id="show_on_homepage" value="1" <?php checked( $checked, 1 ); ?> />
			<p class="description">Check this to show the category in the Popular Categories section on the homepage.</p>
		</td>
	</tr>
	<?php
}
add_action( 'product_cat_edit_form_fields', 'add_homepage_category_checkbox', 10, 1 );
add_action( 'product_cat_add_form_fields', 'add_homepage_category_checkbox', 10, 1 );

// Save the checkbox value
function save_homepage_category_checkbox( $term_id ) {
	$value = isset( $_POST['show_on_homepage'] ) ? 1 : 0;
	update_term_meta( $term_id, 'show_on_homepage', $value );
}
add_action( 'edited_product_cat', 'save_homepage_category_checkbox', 10, 1 );
add_action( 'created_product_cat', 'save_homepage_category_checkbox', 10, 1 );

// enqueue custom script wp-content/themes/f2forganics/assets/js/custom.js
function f2forganics_enqueue_custom_script() {
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'f2forganics_enqueue_custom_script' );

// remove woocommerce_breadcrumb from hook woocommerce_before_main_content
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

add_filter(
	'woocommerce_breadcrumb_defaults',
	function ( $defaults ) {
		$defaults['delimiter']   = ' &nbsp/ ';
		$defaults['wrap_before'] = '<span class="txt-m-201 cl0 flex-c-m flex-w custom-breadcrumb">';
		$defaults['wrap_after']  = '</span>';
		return $defaults;
	}
);

// Remove default add to cart button from loop
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
