jQuery( document ).ready(function($) {
	// Change the width of logo
	wp.customize('honeypress_logo_length', function(control) {
		control.bind(function( controlValue ) {
			$('.custom-logo').css('max-width', '500px');
			$('.custom-logo').css('width', controlValue + 'px');
			$('.custom-logo').css('height', 'auto');
		});
	});


	// Change the width of logo
	wp.customize('after_menu_btn_border', function(control) {
		control.bind(function( borderRadius ) {
		$('.honeypress_header_btn').css('border-radius', borderRadius + 'px');
			
		});
	});
});
