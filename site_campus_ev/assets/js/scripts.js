$(document).ready(function() {


    $('.fancybox-media').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        padding: 0,
        helpers: {
            media: {}
        }
    });

    $(window).scroll(function() {
        var s = $(document).scrollTop();
        if (s > 150) {
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
            'height': $(window).height() + 50
        });
    }

    // Scroll button on HP
    $('#godown').click(function() {
        var divToScroll = $('#evenement').length > 0 ? $('#evenement') : $('#description');
        $('html, body').scrollTo(divToScroll, 1000, {
            offset: {
                top: -80
            }
        });
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


    //mapp anti-slide


    if ($('#map').length < 0) {
        var latlng = new google.maps.LatLng(45.77300, 4.77911);

        var styles = [{
            stylers: [{
                hue: "#ef7a00"
            }, {
                saturation: 130
            }]
        }, {
            featureType: "road",
            elementType: "geometry",
            stylers: [{
                lightness: 100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road",
            elementType: "labels",
            stylers: [{
                visibility: "off"
            }]
        }];


        var myOptions = {
            zoom: 12,
            center: new google.maps.LatLng(45.79300, 4.77911),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            styles: styles
        };

        var contentString = '<div id="windowDirection">' +
            '<div class="title">M Evolution</div>' +
            '<div id="bodyContent">' +
            '6 rue Clément <br>' +
            '69130 Ecully<br>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        map = new google.maps.Map(document.getElementById('map'), myOptions);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: 'Hello World!',
            icon: 'assets/images/cd-icon-location.png'
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);



        //Map
        var el = $('#map');

        function enableScrollingWithMouseWheel() {
            map.setOptions({
                scrollwheel: true
            });
        }

        function disableScrollingWithMouseWheel() {
            map.setOptions({
                scrollwheel: false
            });
        }

        function init() {

            google.maps.event.addListener(map, 'mousedown', function() {
                enableScrollingWithMouseWheel()
            });
        }

        google.maps.event.addDomListener(window, 'load', init);

        $('body').on('mousedown', function(event) {
            var clickedInsideMap = $(event.target).parents('#map').length > 0;

            if (!clickedInsideMap) {
                disableScrollingWithMouseWheel();
            }
        });

        $(window).scroll(function() {
            disableScrollingWithMouseWheel();
        });
    }

    //Filter services
    $('#selectFilter').on('change', function() {
        var type = $(this).val();
        console.log(type);

        if (type == 'all') {
            $('.col-md-4.service').removeClass('hidden');
        } else  {
            $('.col-md-4.service').addClass('hidden');
            $('.' + type).removeClass('hidden');
        }
    });

});