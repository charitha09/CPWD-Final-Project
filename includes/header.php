<header id="main-header">
    <a href="index.php">
    <img src="images/header/logo.png" alt="My Vacation Rental" class="logo"> 
    <img src="images/header/logo-text.png" alt="My Vacation Rental" class="logo"></a>
    <h4>h1 lorem ipsum dolor, consectetur adipiscing elit. Pellentesque pulvinar purus in</h4>
    <div id="header-navi-menu">
        <?php
        $HNaviBar = "<ul>";
        $pgURLHD = "";
        foreach ( $navi_items as $item ){
            $itemURL = $item;           
            if($itemURL == 'HOME'){
                $pgURLHD = "index.php";
            }else{
                $itemURL = strtolower($itemURL);
                $pgURLHD = preg_replace('/ /', '-', $itemURL);
                $pgURLHD .= ".php";
            }
            $HNaviBar .= <<<NVB
    <li>    
        <a href=$pgURLHD> 
            $item
        </a>
    </li>
NVB;
        }
        $HNaviBar .= "</ul>";
        echo $HNaviBar;        
        ?>
    </div>
</header>
