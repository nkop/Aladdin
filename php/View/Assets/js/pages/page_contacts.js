var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,		
				lat: 51.688673,
				lng: 5.286677
			  });
			  
			  var marker = map.addMarker({
				lat: 51.688673,
				lng: 5.286677,
	            title: 'Company, Inc.'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
		        lat : 51.688673,
				lng: 5.286677
		      });
		    });
		}        

    };
}();