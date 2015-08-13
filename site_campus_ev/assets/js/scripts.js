$(document).ready(function() {


    $('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        padding : 0,
        helpers : {
            media : {}
        }
    });

	$(window).scroll(function(){
		var s = $(document).scrollTop();
		if(s > 150){
			$('.navbar').addClass('navbarActive');
		} else {
			$('.navbar').removeClass('navbarActive');
		}
	});

    //Define height banner full screen
    resizeBanner();
    $(window).resize(function() {
    	resizeBanner();
    });

    //parallax effect
      // $(".banner").parallax("40%", 0.2);

    function resizeBanner() {
        $('.banner').css({
            'height': $(window).height()+50
        });
    }

    // Scroll button on HP
    $('#godown').click(function () {
        $('html, body').scrollTo($('#piliers'), 300, {offset:{top:-100}});
    });


    //http://bxslider.com/options
    $('.slider1').bxSlider({
        // slideWidth: 400,
        auto: true,
        autoDelay: 5000,
        speed: 1000,
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 0,
        controls: false
    });
});