( function( $ ) {

	'use strict';
	
	// Scroll to comments	
	function wpexCommentScroll() {
		$( '.comment-scroll a' ).click( function(event) {		
			event.preventDefault();
			$( 'html,body' ).animate( {
				scrollTop: $( this.hash ).offset().top
				}, 'normal' );
		} );
	}
	
	// Toggle sidebar
	function wpexMobileToggle() {
		$( 'a#toggle-btn' ).click( function() {
			$( 'div#toggle-wrap' ).toggleClass( 'visible' );
			$( this ).find( '.fa' ).toggleClass( 'fa-bars fa-remove' );
			return false;
		} );
	}
	
	// Masonry Widths
	function wpexMasonry() {
		$( '.grid' ).masonry( {
			itemSelector : '.loop-entry',
			gutter       : 30,
			columnWidth  : 240,
			isAnimated   : true,
			animationOptions : {
				duration : 300,
				easing   : 'easeInOutCirc',
				queue    : false
			} ,
		} );
	}
	
	$( document ).ready(function() {
		wpexMobileToggle();
		wpexCommentScroll();
		wpexMasonry();
	} );
	
	$( window ).load(function() {
		wpexMasonry();
	} );
	
	
	$( window ).resize(function() {
   		wpexMasonry();
	} );
	
	if ( document.addEventListener ) {
		window.addEventListener( 'orientationchange', function() {
			wpexMasonry();
		} );
		window.addEventListener( 'resize', function() {
			wpexMasonry();
		} );
	}
	
} ) ( jQuery );