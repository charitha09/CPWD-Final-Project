<?php
    require 'includes/config.php'; 

    include 'includes/header.php';
        
    include 'includes/cover.php';
    
    include 'includes/parth.php';
?>
<div class="margin-set">
    <h2>GALLERY</h2>
    <?php
        $imageCount = 9;
        $imageDiv = "";
        for ( $i = 1; $i < ($imageCount+1); $i++ ){
            $imageDiv .= <<<IDV
            <div class="gallery-imgbox">
                <img src="images/gallary/img-gallery-$i.jpg" alt="slide-$i" class="slide-show-images">
            </div>        
IDV;
        }
        echo $imageDiv;
    ?>    
    
</div>    
<?php
    include 'includes/footer.php';
    
    include 'includes/endtag.php';
?>
