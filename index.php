<?php
    require 'includes/config.php'; 

    include 'includes/header.php';
        
    include 'includes/cover.php';
?>
<div class="margin-set">
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
        <div class="right-bucket-sub">
            <h2>TESTIMONIALS</h2>
            <div class="right-sub-image">
                <p>Vestibulum luctus mauris tortor, eu commodo metus suscipit eu. Maecenas sit amet pellentesque.</p>
                <div class="user-cmt-box">
                    <div class="prof-pic-cmt">
                        <img src="images/common/user-pic-1.jpg" alt="ratescover" class="slide-show-images">
                    </div>
                    <p>John Smith</p>
                </div>                
            </div>
            
            <a href="about-the-property.php">READ MORE</a>
        </div> 
    </div> 
</div>
<?php
    include 'includes/footer.php';
    
    include 'includes/endtag.php';
?>
