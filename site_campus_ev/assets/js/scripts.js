$(document).ready(function() {

    //Define height banner full screen
    resizeBanner();
    $(window).resize(function() {
    	resizeBanner();
    });

    //parallax effect
      $(".banner").parallax("40%", 0.3);

    function resizeBanner() {
        $('.banner').css({
            'height': $(window).height()-35
        });
    }

    $('#godown').click(function () {
        $('html, body').scrollTo($('#piliers'), 300, {offset:{top:-30}});
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