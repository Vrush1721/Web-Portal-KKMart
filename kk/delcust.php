<?php

include_once('dbconn.php'); 

$cid=$_GET["cid"];
mysqli_query($cann,"delete from customer where cid=$cid");
mysqli_query($cann,"UPDATE from customer WHERE cid=$cid");
?>

<script type="text/javascript">
    window.location="viewcust.php";
</script>