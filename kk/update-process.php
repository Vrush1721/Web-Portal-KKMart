<?php
include_once 'dbconn.php';
if(count($_POST)>0) {
mysqli_query($cann,"UPDATE customer set cid='" . $_POST['cid'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', mobno='" . $_POST['mobno'] . "' ,email='" . $_POST['email'] . "' WHERE cid='" . $_POST['cid'] . "'");
$message = "Record Modified Successfully";
}

$result = mysqli_query($cann,"SELECT * FROM customer WHERE cid='" . $_GET['cid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="viewcust.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="cid" class="txtField" value="<?php echo $row['cid']; ?>">
<input type="text" name="cid"  value="<?php echo $row['cid']; ?>">
<br>
First Name: <br>
<input type="text" name="fname" class="txtField" value="<?php echo $row['fname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lname" class="txtField" value="<?php echo $row['lname']; ?>">
<br>
City:<br>
<input type="text" name="mobno" class="txtField" value="<?php echo $row['mobno']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>