<?php

include_once('dbconn.php'); 

$pid=$_GET["pid"];
mysqli_query($cann,"delete from product where pid=$pid");
mysqli_query($cann,"UPDATE from product WHERE pid=$pid");



?>

<script type="text/javascript">
    window.location="viewpro.php";
</script>