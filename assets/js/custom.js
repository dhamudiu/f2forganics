// Add to cart button with controls handler
jQuery( document ).ready( function ( $ ) {
	function updateStickyCart () {
		$.get(
			wc_add_to_cart_params.wc_ajax_url.replace( '%%endpoint%%', 'get_refreshed_fragments' ),
			function ( response ) {
				let $cartHtml     = $( response.fragments[ 'div.widget_shopping_cart_content' ] );
				const totalText   = $cartHtml.find( '.woocommerce-Price-amount' ).last().text();
				let totalQuantity = 0;

				$cartHtml.find( '.woocommerce-mini-cart-item .quantity' ).each( function () {
					const text  = $( this ).text();
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
		let parent        = $( this ).closest( '.custom-cart-controls' );
		const productId   = parseInt( parent.data( 'product-id' ) );
		const productType = parent.data( 'product-type' );
		let variationId   = null;
		let variationData = {};

		if ( productType === 'variable' ) {
			const select   = parent.find( '.variation-select' );
			const selected = select.find( 'option:selected' );
			variationId    = parseInt( selected.val() );
			parent         = parent.find( '.variation-actions' );

			if ( ! variationId ) return alert( 'Please select a variation' );

			try {
				variationData = selected.data( 'attributes' ) || {};
			} catch ( e ) {
				console.error( 'No variation attributes found.' );
			}

			selected.data( 'variation-qty', 1 );
		} else {
			parent = parent.find( '.non-variation-actions' );
		}

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
		const controls    = $( this ).closest( '.quantity-controls' );
		const parent      = controls.closest( '.custom-cart-controls' );
		const productId   = parseInt( parent.data( 'product-id' ) );
		const productType = parent.data( 'product-type' );
		const input       = controls.find( '.qty-input' );
		let qty           = parseInt( input.val() );

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

		let variationId   = null;
		let variationData = {};

		if ( productType === 'variable' ) {
			const select   = parent.find( '.variation-select' );
			const selected = select.find( 'option:selected' );
			variationId    = parseInt( selected.val() );
			variationData  = selected.data( 'attributes' ) || {};
			selected.data( 'variation-qty', qty );
		}

		updateCart( productId, qty, variationId, variationData );
	} );

	function handleVariationChange ( $select ) {
		const $parent        = $select.closest( '.custom-cart-controls' );
		const selectedQty    = parseInt( $select.find( 'option:selected' ).data( 'variation-qty' ) ) || 0;
		const $customProduct = $select.closest( '.custom-product' );
		const price          = $select.find( 'option:selected' ).data( 'price' ) || 0;

		const controlsHtml = selectedQty > 0 ? `
			<div class="quantity-controls">
				<button class="decrease-qty">−</button>
				<input type="number" class="qty-input" value="${ selectedQty }" readonly>
				<button class="increase-qty">+</button>
			</div>
		` : `<button class="add-to-cart-btn">Add</button>`;

		$parent.find( '.variation-actions' ).html( controlsHtml );
		$customProduct.find( '.price' ).html( `${ price }` );
	}

	// On variation change: refresh controls
	$( document ).on( 'change', '.variation-select', function () {
		handleVariationChange( $( this ) );
	} );

	let attempts      = 0;
	const maxAttempts = 10;

	( function waitForVariationSelect () {
		if ( typeof handleVariationChange === 'function' && $( '.variation-select' ).length > 0 ) {
			$( '.variation-select' ).each( function () {
				handleVariationChange( $( this ) );
			} );
		} else if ( attempts < maxAttempts ) {
			attempts++;
			setTimeout( waitForVariationSelect, 1000 );
		}
	} )();

	updateStickyCart();

	$( document ).on( 'change', '.variation-price-list input.variation-radio', function () {
		const selectedVarId    = $( this ).val();
		const $parentProduct   = $( this ).closest( '.summary.entry-summary' );
		const $variationSelect = $parentProduct.find( '.variation-select' );

		if ( $variationSelect.length ) {
			$variationSelect.val( selectedVarId );
			handleVariationChange( $variationSelect );
		}
	} );
} );

// Hide sticky cart when footer is visible
jQuery( document ).ready( function ( $ ) {
	const $stickyCart = $( '.sticky-cart' );
	const $footer     = $( 'footer' );

	$( window ).on( 'scroll resize', function () {
		const scrollBottom = $( window ).scrollTop() + $( window ).height();
		const footerTop    = $footer.offset().top;
		const footerHeight = $footer.outerHeight();
		const triggerPoint = footerTop + ( footerHeight / 2 );

		if ( scrollBottom >= triggerPoint ) {
			$stickyCart.addClass( 'hide-sticky-cart' );
		} else {
			$stickyCart.removeClass( 'hide-sticky-cart' );
		}
	} );
} );

// continue-shopping button on cart page
jQuery( document ).ready( function ( $ ) {
	$( document ).on( 'click', '.wp-block-button.continue-shopping a', function ( e ) {
		e.preventDefault();
		window.location.href = my_ajax_data.home_url + '/shop/';
	} );
} );

// send location to phone
jQuery( document ).ready( function ( $ ) {
	$( '#send-location-btn' ).on( 'click', function () {
		const phone   = $( '#sms-phone' ).val().trim();
		const $status = $( '#sms-status' );

		if ( ! phone.match( /^[0-9]{10,15}$/ ) ) {
			$status.text( 'Please enter a valid phone number.' ).css( 'color', 'red' );
			return;
		}

		$status.text( 'Sending...' ).css( 'color', '#000' );

		$.post( {
			url: my_ajax_data.ajax_url,
			data: {
				action: 'send_store_location_sms',
				phone: phone,
			},
			success: function ( response ) {
				if ( response.success ) {
					$status.text( 'Location sent successfully to ' + phone + '!' ).css( 'color', 'green' );
					$( '#sms-phone' ).val( '' );
				} else {
					$status.text( 'Failed to send SMS.' ).css( 'color', 'red' );
				}
			},
			error: function () {
				$status.text( 'Server error. Try again later.' ).css( 'color', 'red' );
			}
		} );
	} );
} );

// Product image zoom functionality on product single page
jQuery( document ).ready( function ( $ ) {
	const $mainImage        = $( '#main-product-image' );
	const $zoomedImage      = $( '#zoomed-image' );
	const $zoomFrame        = $( '.zoom-frame' );
	const $mainImageWrapper = $( '.main-image' );

	$mainImageWrapper.on( 'mouseenter', function () {
		$zoomFrame.show();
	} );

	$mainImageWrapper.on( 'mousemove', function ( e ) {
		const offset = $( this ).offset();
		const x      = e.pageX - offset.left;
		const y      = e.pageY - offset.top;

		const zoomRatio = 2;
		const moveX     = -x * zoomRatio + $zoomFrame.width() / 2;
		const moveY     = -y * zoomRatio + $zoomFrame.height() / 2;

		$zoomedImage.css( {
			top: moveY + 'px',
			left: moveX + 'px',
		} );
	} );

	$mainImageWrapper.on( 'mouseleave', function () {
		$zoomFrame.hide();
	} );

	// Thumbnail click handler (already defined, but make sure to update zoom image too)
	$( '.gallery-thumbnails .thumb-item' ).on( 'click', function () {
		const newSrc = $( this ).data( 'large' );
		$mainImage.attr( 'src', newSrc );
		$zoomedImage.attr( 'src', newSrc );
	} );
} );

// Product image gallery with thumbnails on product single page
jQuery( document ).ready( function ( $ ) {
	const thumbSwiper = new Swiper( '.swiper-thumbs', {
		direction: 'vertical',
		slidesPerView: 4,
		spaceBetween: 10,
		navigation: {
			nextEl: '.swiper-button-next-thumb',
			prevEl: '.swiper-button-prev-thumb',
		},
		mousewheel: true,
		breakpoints: {
			0: { slidesPerView: 3 },
			768: { slidesPerView: 4 },
			1024: { slidesPerView: 5 }
		}
	} );

	// Thumbnail click -> update main image
	$( '.swiper-thumbs .thumb-item' ).on( 'click', function () {
		const newSrc = $( this ).data( 'large' );
		$( '#main-product-image, #zoomed-image' ).attr( 'src', newSrc );
	} );
} );
