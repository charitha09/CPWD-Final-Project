<div id="cover">
    <div id="cover-navi">
        <?php        
        $NaviBar = "";
        $pgURL = "";
        foreach ( $navi_items as $item ){
            $itemURL = $item;           
            if($itemURL == 'HOME'){
                $pgURL = "index.php";
            }else{
                $itemURL = strtolower($itemURL);
                $pgURL = preg_replace('/ /', '-', $itemURL);
                $pgURL .= ".php";
            }
            $NaviBar .= <<<NVB
            <a href=$pgURL> 
                <div class="cover-navi-items navi-active">
                    <h3>$item</h3>
                </div>
            </a>
NVB;
        }
        echo $NaviBar;
        ?>
    </div>
    <div id="cover-banner">
        <div id="cover-image">
            <img src="images/cover/cover1.jpg" alt="Cover">
        </div>
        <div id="cover-footer">
            <h2>Find your home away from home</h2>
            <h3>A unique gateway to spend your vacation peacefully.</h3>            
        </div>
    </div>    
</div>

