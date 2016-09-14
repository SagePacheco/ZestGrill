// JavaScript Document
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(33.018928, -80.176345),
          zoom: 16,
		  scrollwheel: false,
    	  navigationControl: true,
   		  mapTypeControl: true,
    	  scaleControl: true,
    	  draggable: true,
		  animation: google.maps.Animation.DROP,
		  disableDefaultUI: true
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
			
		var marker = new google.maps.Marker({
      		position: mapOptions.center,
      		map: map,
			animation: google.maps.Animation.DROP,
      		title: 'Zest',
			icon: 'images/marker.png'
		});
		google.maps.event.addListener(marker, 'click', toggleBounce);
      }
	  
	  function toggleBounce() {

  		if (marker.getAnimation() != null) {
    		marker.setAnimation(null);
  		} else {
    		marker.setAnimation(google.maps.Animation.BOUNCE);
  		}
	  }
      google.maps.event.addDomListener(window, 'load', initialize);