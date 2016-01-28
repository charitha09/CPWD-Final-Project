function initialize() {
// Marker position
        var paceLatLng = new google.maps.LatLng(6.844786, 79.940494);
         
        var mapOptions = {
            zoom: 14,
            center: paceLatLng
        }
     
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
// Customized Map Marker
 
        var icon = 'images/location/map-marker.png';
        var marker = new google.maps.Marker({
            position: paceLatLng,
            map: map,
            icon: icon,
            title: 'PACE Institute'
        });
    }
 
google.maps.event.addDomListener(window, 'load', initialize);