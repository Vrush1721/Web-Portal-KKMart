<?php

include_once('dbconn.php'); 
$slid=$_GET["slid"];

mysqli_query($cann,"DELETE FROM slides WHERE slid=$slid");


?>

<script type="text/javascript">
    window.location="viewof.php";
</script>