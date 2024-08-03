<?php

include_once('dbconn.php'); 

$orid=$_GET["orid"];
mysqli_query($cann,"delete from orders where orid=$orid");

mysqli_query($cann,"UPDATE from orders WHERE orid=$orid");
mysqli_query($cann,"delete from user_order where orderid=$orid");
mysqli_query($cann,"UPDATE from user_order WHERE orderid=$orid");



?>

<script type="text/javascript">
    window.location="vieworder.php";
</script>