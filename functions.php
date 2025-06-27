<?php

//  Defines the base path for theme assets.
if ( ! defined( 'F2FORGANICS_ASSETS' ) ) {
	define( 'F2FORGANICS_ASSETS', get_template_directory_uri() . '/assets' );
}

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
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), null, true );

	wp_localize_script(
		'custom-js',
		'my_ajax_data',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'home_url' => home_url(),
		)
	);

	// Enqueue Swiper styles and scripts
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'f2forganics_scripts' );

/**
 * Hooks the f2f_enqueue_footer_scripts function to the WordPress wp_enqueue_scripts action.
 * This ensures that additional JavaScript libraries and custom scripts are loaded in the footer.
 */
function f2f_enqueue_footer_scripts() {
	$assets = F2FORGANICS_ASSETS;

	// Core jQuery (optional if already loaded)
	wp_enqueue_script( 'jquery-core', $assets . '/vendor/jquery/jquery-3.2.1.min.js', array(), null, true );

	// Example: Select2 fix
	wp_enqueue_script( 'select2', $assets . '/vendor/select2/select2.min.js', array( 'jquery' ), null, true );

	// Revolution JS
	wp_enqueue_script( 'revolution-tools', $assets . '/vendor/revolution/js/jquery.themepunch.tools.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-core', $assets . '/vendor/revolution/js/jquery.themepunch.revolution.min.js', array( 'jquery' ), null, true );

	// ... Add all others similarly
	// wp_enqueue_script( 'email-decode', $assets . 'm/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-321', $assets . '/vendor/jquery/jquery-3.2.1.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'animsition', $assets . '/vendor/animsition/js/animsition.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'popper', $assets . '/vendor/bootstrap/js/popper.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'bootstrap', $assets . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'themepunch-tools', $assets . '/vendor/revolution/js/jquery.themepunch.tools.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-themepunch-revolution', $assets . '/vendor/revolution/js/jquery.themepunch.revolution.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-video', $assets . '/vendor/revolution/js/extensions/revolution.extension.video.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-carousel', $assets . '/vendor/revolution/js/extensions/revolution.extension.carousel.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-slideanims', $assets . '/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-actions', $assets . '/vendor/revolution/js/extensions/revolution.extension.actions.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-layeranimation', $assets . '/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-kenburn', $assets . '/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-navigation', $assets . '/vendor/revolution/js/extensions/revolution.extension.navigation.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-migration', $assets . '/vendor/revolution/js/extensions/revolution.extension.migration.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revolution-extension-parallax', $assets . '/vendor/revolution/js/extensions/revolution.extension.parallax.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'revo-custom', $assets . '/js/revo-custom.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'daterangepicker-moment', $assets . '/vendor/daterangepicker/moment.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'daterangepicker', $assets . '/vendor/daterangepicker/daterangepicker.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'slick', $assets . '/vendor/slick/slick.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'slick-custom', $assets . '/js/slick-custom.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'parallax100', $assets . '/vendor/parallax100/parallax100.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'lightbox', $assets . '/vendor/lightbox2/js/lightbox.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery.magnific-popup', $assets . '/vendor/MagnificPopup/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'isotope-pkgd', $assets . '/vendor/isotope/isotope.pkgd.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'sweetalert', $assets . '/vendor/sweetalert/sweetalert.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'countdowntime-moment', $assets . '/vendor/countdowntime/moment.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'moment-timezone', $assets . '/vendor/countdowntime/moment-timezone.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'moment-timezone-with-data', $assets . '/vendor/countdowntime/moment-timezone-with-data.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'countdown', $assets . '/vendor/countdowntime/jquery.countdown.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'countdowntime', $assets . '/vendor/countdowntime/countdowntime.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'perfect-scrollbar', $assets . '/vendor/perfect-scrollbar/perfect-scrollbar.min.js', array( 'jquery' ), null, true );

	// Your custom JS
	wp_enqueue_script( 'main-js', $assets . '/js/main.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'f2f_enqueue_footer_scripts' );

// Enqueues WooCommerce Select2 script and style if WooCommerce is active.
function f2f_enqueue_wc_select2() {
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_script( 'select2', WC()->plugin_url() . '/assets/js/select2/select2.full.min.js', array( 'jquery' ), '4.0.13', true );
		wp_enqueue_style( 'select2', WC()->plugin_url() . '/assets/css/select2.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'f2f_enqueue_wc_select2', 25 );

/**
 * Custom WordPress navigation menu walker for customizing menu rendering.
 *
 * Extends the default Walker_Nav_Menu class to modify menu item and submenu output.
 * Adds custom class handling and provides custom rendering for menu items and submenus.
 */
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

/**
 * Custom WordPress navigation menu walker for mobile menus.
 *
 * Extends the default Walker_Nav_Menu class to modify menu rendering for mobile layouts.
 * Adds custom submenu classes, mobile-specific arrow indicators, and handles menu item rendering.
 * Specifically designed to enhance mobile navigation menu presentation.
 */
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

/**
 * Adds custom CSS classes to the body element.
 *
 * Allows dynamic addition of custom classes to the body tag, such as 'animation'
 * and 'home-page' based on specific conditions like being on the homepage.
 *
 * @param array $classes Existing body classes passed by WordPress.
 * @return array Modified array of body classes including custom classes.
 */
function add_custom_body_classes( $classes ) {
	global $ishome;

	$custom_classes = array( 'animation' );

	if ( isset( $ishome ) && true === $ishome ) {
		$custom_classes[] = 'home-page';
	}

	return array_merge( $classes, $custom_classes );
}
add_filter( 'body_class', 'add_custom_body_classes' );

// Open wrapper
function mytheme_wc_wrapper_start() {
	echo '<div class="container">';
}
add_action( 'woocommerce_before_main_content', 'mytheme_wc_wrapper_start', 10 );

// Close wrapper
function mytheme_wc_wrapper_end() {
	echo '</div>';
}
add_action( 'woocommerce_after_main_content', 'mytheme_wc_wrapper_end', 10 );

// Adds a checkbox to the product category add/edit page to control homepage display.
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

// Saves the 'show on homepage' checkbox value for a product category.
function save_homepage_category_checkbox( $term_id ) {
	$value = isset( $_POST['show_on_homepage'] ) ? 1 : 0;
	update_term_meta( $term_id, 'show_on_homepage', $value );
}
add_action( 'edited_product_cat', 'save_homepage_category_checkbox', 10, 1 );
add_action( 'created_product_cat', 'save_homepage_category_checkbox', 10, 1 );

// Remove woocommerce_breadcrumb from hook woocommerce_before_main_content
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

// Customise WooCommerce breadcrumbs
function customize_wc_breadcrumbs( $defaults ) {
	$defaults['delimiter']   = ' &nbsp/ ';
	$defaults['wrap_before'] = '<span class="txt-m-201 cl0 flex-c-m flex-w custom-breadcrumb">';
	$defaults['wrap_after']  = '</span>';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'customize_wc_breadcrumbs' );

// Remove default add to cart button from products loop
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// Remove default price from products loop
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

// Adds custom product display and cart controls to shop loop items.
function custom_product_loop_display() {
	global $product;

	$product_id     = $product->get_id();
	$product_type   = $product->get_type();
	$qty            = 0;
	$variation_data = array();

	// Prepare a lookup of variation_id => quantity from cart
	if ( WC()->cart && ! WC()->cart->is_empty() ) {
		foreach ( WC()->cart->get_cart() as $cart_item ) {
			if ( isset( $cart_item['variation_id'] ) && $cart_item['variation_id'] > 0 ) {
				$variation_data[ $cart_item['variation_id'] ] = $cart_item['quantity'];
			}
		}
	}
	?>

	<div class="custom-product">
		<span class="price">
			<?php
			if ( $product->is_type( 'variable' ) ) {
				// Loop through variations to find '1 kg' or '1 l'
				foreach ( $product->get_available_variations() as $var ) {
					$var_obj  = wc_get_product( $var['variation_id'] );
					$var_name = wc_get_formatted_variation( $var_obj, true, false );

					if ( in_array( $var_name, [ '1 kg', '1 l' ] ) ) {
						echo wp_kses_post( $var_obj->get_price_html() );
						break;
					}
				}
			} else {
				echo wp_kses_post( $product->get_price_html() );
			}
			?>
		</span>


		<div class="custom-cart-controls" id="custom-cart-controls" data-product-id="<?php echo esc_attr( $product_id ); ?>"
			data-product-type="<?php echo esc_attr( $product_type ); ?>">

			<?php if ( $product->is_type( 'variable' ) ) : ?>
				<select class="variation-select">
					<?php foreach ( $product->get_available_variations() as $var ) : ?>
						<?php
						$var_id   = $var['variation_id'];
						$var_qty  = isset( $variation_data[ $var_id ] ) ? $variation_data[ $var_id ] : 0;
						$var_attr = $var['attributes'];
						$var_obj  = new WC_Product_Variation( $var_id );
						$var_name = wc_get_formatted_variation( $var_obj, true, false );
						?>
						<option value="<?php echo esc_attr( $var_id ); ?>" data-variation-qty="<?php echo esc_attr( $var_qty ); ?>"
							data-attributes="<?php echo esc_attr( wp_json_encode( $var_attr ) ); ?>" <?php selected( in_array( $var_name, [ '1 kg', '1 l' ] ), true ); ?>
							data-price="<?php echo esc_attr( $var_obj->get_price_html() ); ?>">
							<?php echo esc_html( $var_name ); ?>
						</option>
					<?php endforeach; ?>
				</select>

				<div class="variation-actions"></div>

			<?php else : ?>
				<div class="non-variation-select">
					<span><?php echo esc_html( ! empty( $product->get_weight() ) ? $product->get_weight() : 'Unit' ) . ' ' . esc_html( get_option( 'woocommerce_weight_unit' ) ); ?></span>
				</div>

				<div class="non-variation-actions">
					<?php
					// Simple product quantity
					$cart_id   = WC()->cart->generate_cart_id( $product_id );
					$cart_item = WC()->cart->get_cart_item( $cart_id );
					$qty       = isset( $cart_item['quantity'] ) ? $cart_item['quantity'] : 0;
					?>
					<?php if ( 0 === $qty ) : ?>
						<button class="add-to-cart-btn">Add</button>
					<?php else : ?>
						<div class="quantity-controls">
							<button class="decrease-qty">−</button>
							<input type="number" class="qty-input" value="<?php echo esc_attr( $qty ); ?>" min="1" readonly>
							<button class="increase-qty">+</button>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<?php
}
add_action( 'woocommerce_after_shop_loop_item', 'custom_product_loop_display', 10 );

// Updates the cart quantity for a product via AJAX.
function custom_update_cart_quantity() {
	if ( ! isset( $_POST['product_id'], $_POST['quantity'] ) ) {
		wp_send_json_error( [ 'message' => 'Invalid data.' ] );
	}

	$product_id = (int) $_POST['product_id'];
	$quantity   = max( 0, (int) $_POST['quantity'] );
	$variation  = isset( $_POST['variation'] ) ? (array) $_POST['variation'] : [];

	$cart = WC()->cart;

	// Detect if it's a variation
	$product = wc_get_product( $product_id );
	if ( $product && $product->is_type( 'variation' ) ) {
		$variation_id = $product_id;
		$parent_id    = $product->get_parent_id();

		$cart_id       = $cart->generate_cart_id( $parent_id, $variation_id, $variation );
		$cart_item_key = $cart->find_product_in_cart( $cart_id );

		if ( $cart_item_key ) {
			if ( $quantity > 0 ) {
				$cart->set_quantity( $cart_item_key, $quantity );
			} else {
				$cart->remove_cart_item( $cart_item_key );
			}
		} elseif ( $quantity > 0 ) {
			$cart->add_to_cart( $parent_id, $quantity, $variation_id, $variation );
		}
	} else {
		// Simple product
		$cart_id       = $cart->generate_cart_id( $product_id );
		$cart_item_key = $cart->find_product_in_cart( $cart_id );

		if ( $cart_item_key ) {
			if ( $quantity > 0 ) {
				$cart->set_quantity( $cart_item_key, $quantity );
			} else {
				$cart->remove_cart_item( $cart_item_key );
			}
		} elseif ( $quantity > 0 ) {
			$cart->add_to_cart( $product_id, $quantity );
		}
	}

	WC()->cart->calculate_totals();

	wp_send_json_success( [ 'message' => 'Cart updated.' ] );
}
add_action( 'wp_ajax_update_cart_quantity', 'custom_update_cart_quantity' );
add_action( 'wp_ajax_nopriv_update_cart_quantity', 'custom_update_cart_quantity' );

// Remove the default rating from the products loop
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

// Remove the default thumbnail from the products loop
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

// Outputs a custom product thumbnail for WooCommerce product loops.
function custom_product_thumbnail() {
	global $product;

	if ( has_post_thumbnail( $product->get_id() ) ) {
		echo '<div class="product-thumbnail">';
		echo '<div class="product-thumbnail-img">';
		echo woocommerce_get_product_thumbnail();
		echo '</div>';
		echo '</div>';
	}
}
add_action( 'woocommerce_before_shop_loop_item_title', 'custom_product_thumbnail', 10 );

// Adds a custom meta box for product subtitle on the product edit screen.
function custom_add_product_meta_box() {
	add_meta_box(
		'product_subtitle',           // ID
		'Product Subtitle',           // Title
		'product_subtitle_callback',  // Callback function
		'product',                    // Post type
		'normal',                     // Context
		'default'                     // Priority
	);
}
add_action( 'add_meta_boxes', 'custom_add_product_meta_box' );

// Callback function for rendering the product subtitle meta box.
function product_subtitle_callback( $post ) {
	wp_nonce_field( 'product_subtitle_nonce_action', 'product_subtitle_nonce' );

	$storage = get_post_meta( $post->ID, '_product_subtitle', true );
	?>
	<p>
		<label for="product_subtitle"><strong>Enter Product Subtitle:</strong></label><br>
		<textarea id="product_subtitle" name="product_subtitle" rows="4"
			style="width:100%;"><?php echo esc_textarea( $storage ); ?></textarea>
	</p>
	<?php
}

// Saves the product subtitle when a product post is saved.
function save_product_subtitle( $post_id ) {
	if ( ! isset( $_POST['product_subtitle_nonce'] ) ||
		! wp_verify_nonce( $_POST['product_subtitle_nonce'], 'product_subtitle_nonce_action' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
	if ( ! current_user_can( 'edit_post', $post_id ) )
		return;

	if ( isset( $_POST['product_subtitle'] ) ) {
		update_post_meta( $post_id, '_product_subtitle', sanitize_textarea_field( $_POST['product_subtitle'] ) );
	}
}
add_action( 'save_post_product', 'save_product_subtitle' );

// Displays the subtitle for a product in the WooCommerce shop loop.
function display_product_subtitle() {
	global $post;

	$product_subtitle = get_post_meta( $post->ID, '_product_subtitle', true );

	$product_subtitle = empty( $product_subtitle ) ? 'Organic | Nutritious' : $product_subtitle;

	echo '<h4 class="product_subtitle" title="' . esc_attr( $product_subtitle ) . '">' . esc_html( $product_subtitle ) . '</h4>';
}
add_action( 'woocommerce_shop_loop_item_title', 'display_product_subtitle', 20 );

// Handles sending an SMS with store location to a provided phone number.
function send_store_location_sms() {
	if ( ! isset( $_POST['phone'] ) ) {
		wp_send_json_error( 'Phone number is required.' );
	}

	$phone = sanitize_text_field( $_POST['phone'] );

	if ( ! preg_match( '/^[0-9]{10,15}$/', $phone ) ) {
		wp_send_json_error( 'Invalid phone number.' );
	}

	// Define SMS data
	$to   = [ $phone ]; // Should be an array
	$msg  = 'Thank you for visiting! Here is our store location: https://goo.gl/maps/YOUR_STORE_LOCATION';
	$urls = array(); // Not used by all gateways, but here for SMS Gateway Hub compatibility

	// Use WP SMS plugin function
	$sms_sent = wp_sms_send( $to, $msg, false, null, $urls );

	if ( $sms_sent ) {
		wp_send_json_success( 'SMS sent successfully.' );
	} else {
		wp_send_json_error( 'Failed to send SMS. Please try again.' );
	}
}
add_action( 'wp_ajax_send_store_location_sms', 'send_store_location_sms' );
add_action( 'wp_ajax_nopriv_send_store_location_sms', 'send_store_location_sms' );

// Remove default WooCommerce add to cart button and product data tabs from single product pages
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Register the "Health Benefits" metabox
function add_health_benefits_metabox() {
	add_meta_box(
		'product_health_benefits',
		__( 'Health Benefits', 'your-textdomain' ),
		'render_health_benefits_metabox',
		'product',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'add_health_benefits_metabox' );

// Render the metabox content with TinyMCE
function render_health_benefits_metabox( $post ) {
	$value = get_post_meta( $post->ID, '_health_benefits', true );

	// Output the WordPress editor
	wp_editor(
		wp_kses_post( $value ),
		'health_benefits_editor',
		array(
			'textarea_name' => 'health_benefits',
			'media_buttons' => true,
			'teeny'         => false,
			'textarea_rows' => 8,
		)
	);
}

// Saves health benefits metadata for a product.
function save_health_benefits_meta( $post_id ) {
	if (
		( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) ||
		! current_user_can( 'edit_post', $post_id ) ||
		! isset( $_POST['health_benefits'] )
	) {
		return;
	}

	update_post_meta(
		$post_id,
		'_health_benefits',
		wp_kses_post( $_POST['health_benefits'] )
	);
}
add_action( 'save_post_product', 'save_health_benefits_meta' );
