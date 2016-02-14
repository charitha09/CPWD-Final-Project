<?php
    require 'includes/config.php'; 

    include 'includes/header.php';
        
    include 'includes/cover.php';
    
    include 'includes/parth.php';
?>
<div class="margin-set">
    <div id="left-bucket">
        
    </div>
    <div id="right-bucket">
        <div class="right-bucket-sub">
            <h2>PROPERTY SUMMARY</h2>
            <div class="right-sub-image">
                <img src="images/common/property-summary.jpg" alt="ratescover" class="slide-show-images">
            </div>
            <p>Vestibulum luctus mauris tortor, eu commodo metus suscipit eu. Maecenas sit amet pellentesque. </p>
            <a href="about-the-property.php">READ MORE</a>
        </div> 
        <div class="right-bucket-sub">
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
            <script>
                function initialize() {
                // Marker position
                    var location = new google.maps.LatLng(5.972583, 80.520959);

                    var mapOptions = {
                        zoom: 12,
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
            </script>
            <h2>LOCATION MAP</h2>
            <div id="map-canvas"></div>
            <div id="map-bottom-bucket">
                <a href="rates-&-reservations.php">
                    <p>Vestibulum luctus mauris tortor, eu commodo metus suscipit eu. Maecenas sit amet pellentesque. </p>
                </a>
            </div>
            
        </div> 
    </div>
</div>
<?php
    include 'includes/footer.php';
    
    include 'includes/endtag.php';
?>
