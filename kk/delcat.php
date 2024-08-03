<?php

include_once('dbconn.php'); 
$ctid=$_GET["ctid"];

mysqli_query($cann,"DELETE FROM category WHERE ctid=$ctid");


?>

<script type="text/javascript">
    window.location="viewcate.php";
</script>