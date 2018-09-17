$(document).ready(function() {
	var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        nav: false,
        loop: true,
		autoplay:true,
		autoplayTimeout:6000,
		autoplaySpeed: 2000,
		autoplayHoverPause:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })
});