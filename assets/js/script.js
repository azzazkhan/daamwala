$(document).ready(function(){
	$('#category_slide').owlCarousel({
		loop: true,
		responsiveClass: true,
		responsive: {
			0: { items: 1 }, // Phones in both portrait and landscape mode.
			700: { items: 2 }, // Tablets in portrait mode.
			1000: { items: 3 }, // Desktops and tablets in landscape mode.
			1300: { items: 4 }, // Wide screen desktops.
			1500: { items: 5 }, // Wide screens and iMacs.
		}
	});
	$('#stack_slide').owlCarousel({
		loop: true,
		responsiveClass: true,
		responsive: {
			0: { items: 1 }, // Phones in portrait/landscape mode, tablets in portrait mode.
			1000: { items: 2 }, // Desktops and tablets in landscape mode
			1300: { items: 3 }, // Wide screen desktops and iMacs.
		}
	});
	for (var i = 1; i <= 10; i++) {
		var opt = $('<option></option>');
			opt.val(i); opt.html(i);
		$('select.quantity').append(opt);
	}

});