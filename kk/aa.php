<?php

 // Included configuration file in our code.

include("dbconn.php");

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>How To Create A Responsive Image Slider</title>

<link href="StyleSheet.css" rel="stylesheet" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script>

$(document).ready(function () {

$('.flexslider').flexslider({

animation: 'fade',

controlsContainer: '.flexslider'

});

});

</script>
<style type="text/css">
    body {
margin:0px auto;
font-family:Candara;
font-size:14px;
width:100%;
}
.h2
{
text-align:center;
}
.footer
{
width: 100%;
text-align: center;
padding-top: 40px;
font-size: 16px;
}
.container{
width:80%;
min-width: 150px;
max-width: 960px;
margin:0px auto;
text-align:center;
}
.container a:active,
.flexslider a:active,
.container a:focus,
.flexslider a:focus  { outline: none; }
.slides,
.flex-control-nav,
.flex-direction-nav {
    margin: 0;
    padding: 0;
    list-style: none;
}
.flexslider a img { outline: none; border: none; }
.flexslider {
    margin: 0;
    padding: 0;
    position: relative;
    zoom: 1;
    padding: 10px;
    background: #ffffff;
}
.flexslider .slides > li {
    display: none;
    backface-visibility:hidden;
    -webkit-backface-visibility: hidden;
}
.flexslider .slides img {
    width: 100%;
    display: block;
   -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}
.slides:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}
html[xmlns] .slides { display: block; }
* html .slides { height: 1%; }
.flexslider .slides { zoom: 1; }
.flex-direction-nav a {
    display: block;
    position: absolute;
    margin: -17px 0 0 0;
    width: 35px;
    height: 35px;
    top: 50%;
    cursor: pointer;
    text-indent: -9999px;
    background-color: #ff6a00;
    
}
.flex-direction-nav a:before {
    display: block;
    position: absolute;
    content: '';
    width: 9px;
    height: 13px;
    top: 11px;
    left: 11px;
    background: url(image/arrows.png) no-repeat;
}
.flex-direction-nav a:after {
    display: block;
    position: absolute;
    content: '';
    width: 0;
    height: 0;
    top: 35px;
}
.flex-direction-nav .flex-next {
    right: -5px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}
.flex-direction-nav .flex-prev {
    left: -5px;
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}
.flex-direction-nav .flex-next:before { background-position: -9px 0; left: 15px; }
.flex-direction-nav .flex-prev:before { background-position: 0 0; }
.flex-direction-nav .flex-next:after {
    left: 20px;
    border-bottom: 5px solid transparent;
    border-left: 12px solid #ff6a00;
}
.flex-direction-nav .flex-prev:after {
    left: 0;
    border-bottom: 5px solid transparent;
    border-right: 16px solid #ff6a00;
    
}
.flexslider .flex-control-nav {
    position: absolute;
    width: 100%;
    bottom: -40px;
    text-align: center;
    margin: 0 0 0 -10px;
}
.flex-control-nav li {
    display: inline-block;
    zoom: 1;
}
.flex-control-paging li a {
    display: block;
    cursor: pointer;
    text-indent: -9999px;
    width: 12px;
    height: 12px;
    margin: 0 3px;
    background-color: #b6b6b6 \9;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -webkit-box-shadow: inset 0 0 0 2px #b6b6b6;
    -moz-box-shadow: inset 0 0 0 2px #b6b6b6;
    box-shadow: inset 0 0 0 2px #b6b6b6;
}
.flex-control-paging li a.flex-active {
    background-color: #ff6a00;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
</style>
</head>

<body>

<div class="container">

<h2>How To Create A Responsive Image Slider</h2>

<div class="flexslider">

<ul class="slides">

                    <?php

// Creating query to fetch state information from mysql database table.

$state_query = "select * from slides";

$state_result = mysqli_query($cann,$state_query);

while($r = mysqli_fetch_array($state_result)){ ?>

<li>

<img src="<?php echo $r['pimg'];?>" />

</li>

<?php } ?>

</ul>

</div>

 

 

<!--footer-->

<div class="footer">

<p>&copy; 2013 All rights reserved by HighTechnology.in

<a href="http://hightechnology.in" target="_blank">HighTechnology.in</a>

| Hosting Partner <a href="http://www.grootstech.com" target="_blank">Grootstech Solutions</a></p>

</div>

</div>

</body>

</html>
