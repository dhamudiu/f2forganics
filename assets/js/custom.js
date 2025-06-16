jQuery( document ).ready( function ( $ ) {
	$( '.custom-quantity' ).each( function () {
		var $container = $( this );
		var $input = $container.find( 'input.qty' );
		var $plus = $container.find( '.qty-plus' );
		var $minus = $container.find( '.qty-minus' );

		$plus.on( 'click', function () {
			var current = parseInt( $input.val() ) || 0;
			var max = parseInt( $input.attr( 'max' ) ) || 9999;
			if ( current < max ) {
				$input.val( current + 1 ).trigger( 'change' );
			}
		} );

		$minus.on( 'click', function () {
			var current = parseInt( $input.val() ) || 0;
			var min = parseInt( $input.attr( 'min' ) ) || 1;
			if ( current > min ) {
				$input.val( current - 1 ).trigger( 'change' );
			}
		} );
	} );
} );

jQuery( function ( $ ) {
	function updateStickyCart () {
		$.get(
			wc_add_to_cart_params.wc_ajax_url.replace( '%%endpoint%%', 'get_refreshed_fragments' ),
			function ( response ) {
				let $cartHtml = $( response.fragments[ 'div.widget_shopping_cart_content' ] );
				const totalText = $cartHtml.find( '.woocommerce-Price-amount' ).last().text();

				let totalQuantity = 0;
				$cartHtml.find( '.woocommerce-mini-cart-item .quantity' ).each( function () {
					const text = $( this ).text(); // e.g., "4 × ₹420.00"
					const match = text.match( /^(\d+)/ );
					if ( match ) {
						totalQuantity += parseInt( match[ 1 ] );
					}
				} );

				$( '.cart-items-count' ).text( `${ totalQuantity } item${ totalQuantity !== 1 ? 's' : '' }` );
				$( '.cart-total-price' ).text( totalText && totalText.trim() !== '' ? totalText : '₹ 0.00' );
			}
		);
	}

	function getSelectedVariationData ( select ) {
		const selectedOption = select.find( 'option:selected' );
		const variationId = parseInt( selectedOption.val() );
		const variationData = selectedOption.data( 'attributes' ) || {};

		return { variationId, variationData };
	}

	function updateCart ( productId, quantity, variationId = null, variation = {} ) {
		const data = {
			action: 'update_cart_quantity',
			product_id: variationId || productId,
			quantity: quantity
		};

		if ( variationId && Object.keys( variation ).length > 0 ) {
			data.variation = variation;
		}

		$.post( my_ajax_data.home_url + '/wp-admin/admin-ajax.php', data, function ( response ) {
			if ( response.success ) {
				updateStickyCart();
			} else {
				console.error( 'Error:', response.data );
			}
		} );
	}

	$( document ).on( 'click', '.add-to-cart-btn', function () {
		let parent = $( this ).closest( '.custom-cart-controls' );
		const productId = parseInt( parent.data( 'product-id' ) );
		const productType = parent.data( 'product-type' );

		let variationId = null;
		let variationData = {};

		if ( productType === 'variable' ) {
			const select = parent.find( '.variation-select' );
			const selected = select.find( 'option:selected' );
			variationId = parseInt( selected.val() );
			parent = parent.find( '.variation-actions' );

			if ( !variationId ) return alert( 'Please select a variation' );

			try {
				variationData = selected.data( 'attributes' ) || {};
			} catch ( e ) {
				console.error( 'No variation attributes found.' );
			}

			selected.data( 'variation-qty', 1 );
		} else {
			parent = parent.find( '.non-variation-actions' );
		}

		// Add the product
		parent.html( `
			<div class="quantity-controls">
				<button class="decrease-qty">−</button>
				<input type="number" class="qty-input" value="1" readonly>
				<button class="increase-qty">+</button>
			</div>
		`);

		updateCart( productId, 1, variationId, variationData );
	} );

	$( document ).on( 'click', '.increase-qty, .decrease-qty', function () {
		const controls = $( this ).closest( '.quantity-controls' );
		const parent = controls.closest( '.custom-cart-controls' );
		const productId = parseInt( parent.data( 'product-id' ) );
		const productType = parent.data( 'product-type' );
		const input = controls.find( '.qty-input' );
		let qty = parseInt( input.val() );

		if ( $( this ).hasClass( 'increase-qty' ) ) qty++;
		else qty--;

		if ( qty <= 0 ) {
			if ( productType === 'variable' ) {
				parent.find( '.variation-actions' ).html( `<button class="add-to-cart-btn">Add</button>` );
			} else {
				parent.find( '.non-variation-actions' ).html( `<button class="add-to-cart-btn">Add</button>` );
			}
		} else {
			input.val( qty );
		}

		let variationId = null;
		let variationData = {};

		if ( productType === 'variable' ) {
			const select = parent.find( '.variation-select' );
			const selected = select.find( 'option:selected' );
			variationId = parseInt( selected.val() );
			variationData = selected.data( 'attributes' ) || {};
			selected.data( 'variation-qty', qty );
		}

		updateCart( productId, qty, variationId, variationData );
	} );

	// On variation change: refresh controls
	$( document ).on( 'change', '.variation-select', function () {
		const $select = $( this );
		const $parent = $select.closest( '.custom-cart-controls' );
		const selectedQty = parseInt( $select.find( 'option:selected' ).data( 'variation-qty' ) ) || 0;
		const $customProduct = $select.closest( '.custom-product' );
		const price = $select.find( 'option:selected' ).data( 'price' ) || 0;

		const controlsHtml = selectedQty > 0 ? `
			<div class="quantity-controls">
				<button class="decrease-qty">−</button>
				<input type="number" class="qty-input" value="${ selectedQty }" readonly>
				<button class="increase-qty">+</button>
			</div>
		` : `<button class="add-to-cart-btn">Add</button>`;

		$parent.find( '.variation-actions' ).html( controlsHtml );
		$customProduct.find( '.price' ).html( `${ price }` );
	} );

	$( '.variation-select' ).trigger( 'change' );


	updateStickyCart();
} );

jQuery( document ).ready( function ( $ ) {
	const $stickyCart = $( '.sticky-cart' );
	const $footer = $( 'footer' ); // Adjust if your footer has a different class

	$( window ).on( 'scroll resize', function () {
		const scrollBottom = $( window ).scrollTop() + $( window ).height();
		const footerTop = $footer.offset().top;
		const footerHeight = $footer.outerHeight();
		const triggerPoint = footerTop + ( footerHeight / 2 ); // Half visible

		if ( scrollBottom >= triggerPoint ) {
			$stickyCart.addClass( 'hide-sticky-cart' );
		} else {
			$stickyCart.removeClass( 'hide-sticky-cart' );
		}
	} );
} );
