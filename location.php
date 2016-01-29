<?php
    require 'includes/config.php'; 

    include 'includes/header.php';
        
    include 'includes/cover.php';
     
    include 'includes/parth.php';
?>
<div class="margin-set">
    <div id="left-bucket">
        <div id="left-bucket-details">
            <h2>LOCATION DESCRIPTION</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec turpis id metus gravida rhoncus pulvinar a felis. Vivamus bibendum ullamcorper leo vitae posuere. Curabitur vel nibh sagittis, feugiat eros et, vehicula lorem. Nullam consequat vestibulum risus, et vulputate libero malesuada id. Quisque turpis tortor, sollicitudin sed porta id, vestibulum in augue. Nulla dictum bibendum leo a aliquam. Aliquam nec diam elit. In pharetra condimentum mollis. Quisque euismod neque vitae metus vehicula, et egestas purus varius. Ut vel tempus dui.</p>
            <p>Proin eros nunc, varius vitae sagittis condimentum, ultricies in metus. Duis condimentum dictum rutrum. Aliquam ut blandit odio. Donec volutpat eros nisi. Vivamus ultrices lacus a velit posuere, in feugiat risus luctus. Cras congue vel quam a finibus. Sed tempor sagittis quam, porttitor sollicitudin ex fringilla ut. Nunc mattis consectetur sapien, sed suscipit augue consectetur id. Proin sit amet magna eget leo mollis pellentesque eu et augue. Ut turpis ligula, maximus non imperdiet a, congue feugiat est. Sed imperdiet sapien nisl, eu tristique massa scelerisque vel. Morbi tincidunt pulvinar consectetur.</p>
            <p>Proin iaculis sollicitudin eros id mollis. Aliquam est elit, semper eget urna eget, tristique vestibulum urna. Curabitur pellentesque leo turpis, id finibus mi faucibus sit amet. Nam a libero pharetra nisl accumsan scelerisque. Praesent cursus purus est, efficitur vehicula lectus ultrices at. Cras mattis ligula sit amet porttitor semper. Curabitur nec tincidunt urna. Duis rutrum cursus rutrum. Proin sit amet tristique mi.</p>
            <p>Vestibulum luctus mauris tortor, eu commodo metus suscipit eu. Maecenas sit amet pellentesque ipsum. In elementum a odio vitae vulputate. Praesent ac dictum libero. Etiam fringilla gravida pellentesque. Integer et consequat erat, ac lacinia felis. Nunc vel mi efficitur, dapibus libero vel, mollis dolor. Maecenas viverra eros at pulvinar facilisis.</p>
        </div>
        <div id="map-canvas"></div>
    </div>
    <div id="right-bucket">
        <div class="right-bucket-sub">
            <h2>GALLERY</h2>
            <div class="right-sub-image cycle-slideshow" data-cycle-speed="2000" data-cycle-manual-speed="5000">
                <img src="images/gallary/img-gallery-1.jpg" alt="slide-1" class="slide-show-images">
                <img src="images/gallary/img-gallery-2.jpg" alt="slide-2" class="slide-show-images">
                <img src="images/gallary/img-gallery-3.jpg" alt="slide-3" class="slide-show-images">
                <img src="images/gallary/img-gallery-4.jpg" alt="slide-4" class="slide-show-images">
                <img src="images/gallary/img-gallery-5.jpg" alt="slide-5" class="slide-show-images">
                <img src="images/gallary/img-gallery-6.jpg" alt="slide-6" class="slide-show-images">
                <img src="images/gallary/img-gallery-7.jpg" alt="slide-7" class="slide-show-images">
                <img src="images/gallary/img-gallery-8.jpg" alt="slide-8" class="slide-show-images">
                <img src="images/gallary/img-gallery-9.jpg" alt="slide-9" class="slide-show-images">                
            </div>
            <a href="gallery.php">READ MORE</a>
        </div>
        <div class="right-bucket-sub">
            <h2>RATS & RESERVATIONS</h2>
            <div class="right-sub-image">
                <img src="images/rates/rates-cover.jpg" alt="ratescover" class="slide-show-images">                
            </div>
            <p>Vestibulum luctus mauris tortor, eu commodo metus suscipit eu. Maecenas sit amet pellentesque.</p>
            <a href="rates-&-reservations.php">READ MORE</a>
        </div>
        <div class="right-bucket-sub">
            <h2>PROPERTY SUMMARY</h2>
            <div class="right-sub-image">
                <img src="images/common/property-summary.jpg" alt="ratescover" class="slide-show-images">
            </div>
            <p>Vestibulum luctus mauris tortor, eu commodo metus suscipit eu. Maecenas sit amet pellentesque. </p>
            <a href="about-the-property.php">READ MORE</a>
        </div>        
    </div>        
</div>
<?php
    include 'includes/footer.php';
    
    include 'includes/endtag.php';
?>
