<?php

$search = $_POST['search'];
$pname = $_POST['pname'];


include ('dbconn.php');

$sql = "select * from product where $pname like '%$search%'";

$result = $cann->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["pname"]."  ".$row["ppics"]."  ".$row["pprice"]."<br>";
}
} else {
	echo "0 records";
}

$cann->close();

?>