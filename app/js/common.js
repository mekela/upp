$(document).ready(function() {
	//fancybox
	$('.fancybox').fancybox({
		helpers: {
			overlay: {
				locked: false
			}
		}
	});
	
	//bxslider
	$('.top-slider__block ul').bxSlider();

	$('.contacts__right ul').bxSlider();
});