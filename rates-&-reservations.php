<?php
    require 'includes/config.php'; 

    include 'includes/header.php';
        
    include 'includes/cover.php';
    
    include 'includes/parth.php';
?>
<div class="margin-set">
    <div id="left-bucket">
        <div id="left-bucket-details">
            <h2>RATES AND RESERVATIONS</h2>
            <h4>RATES</h4>
            <table>
                <tr><th></th><th>Weeknight</th><th>Weekend night</th><th>Weekly</th><th>Monthly</th><th>Minimum Stay</th></tr>
                <tr><td>Rate Summary</td><td>$70 - $75</td><td>$70 - $75</td><td>$350 - $375</td><td>$1100 - $1200</td><td>2 nights</td></tr>
                <tr><td>Apr. 1 2013 - Dec. 31 2013</td><td>$70</td><td>$70</td><td>$350</td><td>$1100</td><td>2 nights</td></tr>
                <tr><td>Jan. 1 2014 - Dec. 31 2014</td><td>$70</td><td>$70</td><td>$375</td><td>$1200</td><td>2 nights</td></tr>
                <tr><td>All Other Dates</td><td>$70</td><td>$70</td><td>$350</td><td>$1100</td><td>2 nights</td></tr>
            </table>
            <div id="more-rates">
                <h3>Cant rate for your travel dates?<a href="contact-us.php">contact the owner</a></h3>
            </div>
            <h4>ADDITIONAL NOTES</h4>
            <ul>
                <li>2013 Kandy Esala Perehera dates to be confirmed (tentatively 8-20 August).
Rates above are inclusive of local taxes.</li>
                <li>in peak seasons (including December - January and Perahera season) a 5 night minimum may apply.</li>
                <li>In accordance with local customs and laws we do not accept unmarried Sri Lankan couples.</li>
                <li>Guests are required to sign our "Standard Rental Agreement and Contract"</li>
            </ul>
        </div>
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
