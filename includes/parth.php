<div id="pagelocationview">
    <?php
        $pagelink = ucwords(strtolower($title));
        $pagelocation = '<h2><a href="index.php">Home</a> / ' . $pagelink . '</h2>';
        echo $pagelocation;
    ?>
</div> 