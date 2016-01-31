function initialize() {
// Marker position
        var location = new google.maps.LatLng(5.972583, 80.520959);
         
        var mapOptions = {
            zoom: 14,
            center: location
        }
     
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
// Customized Map Marker 
        var icon = 'images/location/map-marker.png';
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: icon,
            title: 'Charitha Home'
        });
    }
 
google.maps.event.addDomListener(window, 'load', initialize);