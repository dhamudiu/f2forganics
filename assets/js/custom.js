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