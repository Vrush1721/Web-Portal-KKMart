<?php
session_start();
include_once 'dbconn.php';
if(count($_POST)>0) {
    $funame = $_POST['funame'];
   $email= $_POST['email'];
     $mobno = $_POST['mobno'];
    
    $address= $_POST['address'];
     $city = $_POST['city'];
     $state= $_POST['state'];
     $zip= $_POST['zip'];
     $paymod= $_POST['paymod'];
     $status = "Delivered"; 
mysqli_query($cann,"UPDATE orders set orid='" . $_POST['orid'] . "', status='" . $_POST['status'] ."' WHERE orid='" . $_POST['orid'] . "'");
?>
<script type="text/javascript">
       
        
        window.location="myorder.php";
        
        
      </script>
<?php
}
$result = mysqli_query($cann,"SELECT * FROM orders WHERE orid='".$_GET['orid']."'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update order</title>
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
        height: 200px;
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
            width: 60%;
        }
    }
</style>
</head>
<?php include_once('navbar.php'); ?>
<body>
    <center style="padding-top: 5%;">
<button class="bs" class="bs"><a href="myorder.php">Back </a></button>
<form name="frmUser" method="post" action="" class="frmUser">

<input type="hidden" name="orid" class="txtField" value="<?php echo $row['orid']; ?>">
<input type="hidden" name="orid"  value="<?php echo $row["orid"];?>">
<p  class="uph">If you want to cancel order please click on cancel</p>
<!--<select  name="status" style="width:200px;height: 40px;font-size: 20px;" >
   
    <option value="Canceled">canceled</option>
  </select>
-->
<input type="hidden" name="status" value="Canceled">
<br><br>
<input type="submit" name="submit" value="Cancel" class="buttom" style="font-size: 23px;
  height: 40px;
   width: 150px;
   border: 3px solid  #ff4500;
   box-shadow: 0 9px #999;
   border-radius: 10px;" >

</form>

</center>
<br><br>
</body>
</html>
<?php include('./footer/footer.php');?>