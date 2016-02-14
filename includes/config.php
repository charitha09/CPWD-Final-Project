<?php
$pagenameTemp = pagename();
$pagename = $pagenameTemp[0];
$titleTemp = pagename();
$title = $titleTemp[1];
$htmlheader = '';
$scriptimport = '';

/*Creating js and css file parths*/
$cssfile = 'style/' . $pagename . '-stylesheet.css';
$jsfile = 'js/' . $pagename . '-script.js';

/*DATA BASE info*/
define("SERVER", "localhost");
define("USNAME", "root");
define("PASSWD", "");
define("DBNAME", "my-vacation-rental");

/*Creating DB connection*/
$mysqli = mysqli_connect(SERVER, USNAME, PASSWD, DBNAME);


/*Printing HTML headder to document*/
if ( $title == "My Vaction Rental"){
$htmlheader .= <<<HTH
<!DOCTYPE html>
<html>
<head>
    <title>$title</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/common-stylesheet.css">
    <link rel="stylesheet" type="text/css" href="$cssfile">
</head>
<body>
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="$jsfile"></script>    
    <div id="main-container">
HTH;
}
elseif ( $title == "Location"){
$htmlheader .= <<<HTH
<!DOCTYPE html>
<html>
<head>
    <title>$title</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/common-stylesheet.css">
    <link rel="stylesheet" type="text/css" href="$cssfile">
</head>
<body>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="$jsfile"></script>    
    <div id="main-container">
HTH;
}else{
$htmlheader .= <<<HTH
<!DOCTYPE html>
<html>
<head>
    <title>$title</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/common-stylesheet.css">
    <link rel="stylesheet" type="text/css" href="$cssfile">
</head>
<body>
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="$jsfile"></script>    
    <div id="main-container">
HTH;
}
echo $htmlheader;  

/*Making navi-items Array to store navi items*/
$sql = "SELECT item FROM navi_items"; 
$res = mysqli_query($mysqli,$sql);
$navi_items = array();
$count = 0;
if($res){
     while($newArray = mysqli_fetch_array($res,MYSQLI_ASSOC)){
          $navi_items[$count] = $newArray['item'];
          $count++;
     }
}
//print_r($navi_items);

/*function to read URL and get current file name*/
function pagename(){
    $pagename = basename($_SERVER["SCRIPT_NAME"]);
    $pagename = preg_replace('/.php/', '', $pagename); 
    if( $pagename == 'index'){
        $pagename = 'home';
        $title = 'My Vaction Rental';
    }else{
        $title = preg_replace('/-/', ' ', $pagename);
        $title = ucwords(strtolower($title));
    }
    return array($pagename, $title);
}

?>

