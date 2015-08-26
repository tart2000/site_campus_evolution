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


    //mapp anti-slide


  var latlng = new google.maps.LatLng(48.86015, 2.34546);

  var styles = [{
    stylers: [{
      hue: "#ef7a00"
    }, {
      saturation: 30
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
    zoom: 16,
    center: new google.maps.LatLng(48.86125, 2.34546),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    styles: styles
  };

  var contentString = '<div id="windowDirection">' +
    '<div class="title">M Evolution</div>' +
    '<div id="bodyContent">' +
    '34 rue des Bourdonnais  <br>' +
    '75001 Paris<br>' +
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


});