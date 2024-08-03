<?php
include_once 'dbconn.php';
if(count($_POST)>0) {
mysqli_query($cann,"UPDATE product set pid='" . $_POST['pid'] . "', pname='" . $_POST['pname'] . "', pprice='" . $_POST['pprice'] . "', pdescrip='" . $_POST['pdescrip'] . "' ,ppics='" . $_POST['ppics'] . "' WHERE pid='" . $_POST['pid'] . "'");
?>
<script type="text/javascript">
       
        
        window.location="viewpro.php";
        
        
      </script>
<?php
}
$result = mysqli_query($cann,"SELECT * FROM product WHERE pid='".$_GET['pid']."'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
<style type="text/css">
#foot{
	padding-top: 1px;
}.heading{
    display: none;
   }
   
	.frmuser{
        background-color: white;
		box-sizing: border-box;
		box-shadow: 0 15px 30px ;
		
		width: 20%;
		height: 600px;
		text-align: center;
		padding: 30px;
	}
	.frmuser input{
        height: 30px;
        width: 200px;
	}
	.uph{
		font-size: 16px;
		font-weight: bold;
	}
	#adminh1{
          display: none;
   }
   .buttom:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
	@media only screen and  (max-width: 768px) {
		.frmuser{
			width: 60%;
		}
	}
</style>
</head>
<?php include_once("adminnav.php"); ?>
<body>
	<center style="padding-top: 5%;">
<button style="float:left; margin-left: 55%; width:60px; height: 30px;"><a href="viewpro.php" class="btn btn-primary" style="font-size: 20px;">Back</a></button><br><br>
<form name="frmUser" method="post" action="" class="frmUser">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<p style="font-size:30px; color: black;">Update Product</p>
<form name="frmUser" method="post" action="" class="frmUser">
<p style="padding-right: 80%;" class="uph">pid</p>
<input type="hidden" name="pid" class="txtField" value="<?php echo $row['pid']; ?>">
<input type="text" name="pid"  value="<?php echo $row["pid"];?>">
<br><br>
<p style="padding-right: 39%;"class="uph">Product Name </p> 
<input type="text" name="pname"  value="<?php echo $row['pname']; ?>">
<p style="padding-right: 40%;" class="uph">Product Price</p>
<input type="text" name="pprice" class="txtField" value="<?php echo $row['pprice']; ?>">
<p style="padding-right: 20%;"class="uph">Product Description</p>
<input type="text" name="pdescrip" class="txtField" value="<?php echo $row['pdescrip']; ?>">
<p style="padding-right: 70%;"class="uph">Image</p>
<input type="file" name="ppics" class="txtField" value="<?php echo $row['ppics']; ?>">
<br><br>
<input type="submit" name="submit" value="Submit" class="buttom" style="font-size: 23px;
  height: 40px;
   width: 150px;
   border: 3px solid  #ff4500;
   box-shadow: 0 9px #999;
   border-radius: 10px;">

</form>
</center>
</body>
</html>
<?php include('./footer/footer.php');?>