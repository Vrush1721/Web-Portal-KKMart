<?php 
session_start();
include_once('dbconn.php'); 

if(isset($_GET['page'])){
    $pages=array("product", "cart");

    if(in_array($_GET['page'], $pages)) {
        $_page=$_GET['page'];
    } else {
        $_page="product";
    }
} else {
    $_page="product";
}
?>