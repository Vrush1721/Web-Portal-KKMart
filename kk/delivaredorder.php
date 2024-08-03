<?php 
session_start();
include_once('dbconn.php'); 
$em=$_SESSION['email'];
      if($em == true){
        
            //header("location:adminnav.php");
      }
      else
      {
        header("location:custlog.php");
      
      }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 #foot{
    padding-top: 10%;
   }
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 50%;
  border: 2px solid black;
}
 .bs{
  font-size: 23px;
  height: 45px;
   width: 180px;
   border: 3px solid  #ff4500;
   box-shadow: 0 9px #999;
   border-radius: 10px;
 

}
.bs:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
.bs a{
  text-decoration: none;
  color: black;
}
th, td {
  border: 2px solid orange;
  text-align: left;
  padding: 8px;
}
td{
  background-color: white;
  text-align: center;
}
th{
  text-align: center;
  background-image: linear-gradient(45deg, #ff4500, #ff4500);
}
.obutton button{
  font-size: 23px;
  height: 45px;
   width: 105px;
   border: 3px solid  #ff4500;
   box-shadow: 0 9px #999;
   border-radius: 10px;
 

}
.obutton button:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
.obutton button a{
  text-decoration: none;
  color: black;
}
</style>
</head>
<?php include_once('navbar.php'); ?>
<body>
<center>
<h1>Your Order</h1>
<br><br>
<div style="overflow-x:auto;">
  <button class="bs" class="bs"><a href="myorder.php">Pending Order</a></button>
  <br><br>
  <table>
  <tr>
         <th id="poid">oid</th>
        <th>Order date</th>
       <th>Order Items</th>
       <th>total</th>
        <th>Paymod</th>
        <th>status</th>
        
      </tr>
  <?php
      include ('dbconn.php');
      if (isset($_SESSION["email"])) {

      $res = mysqli_query($cann,"select * from orders  where email='$_SESSION[email]' && status='Delivered' ");
      $i=0;
      while ($row = mysqli_fetch_array($res)) {
     $i++;
      ?>
      <tr>

        <td class="id"><?php echo $i; ?></td>
         <td><?php echo $row['date']; ?></td>
       
        
        
       <td>
        <table style="border: none;">
        <tr >
           <th style="border: none;background-image:none;">pname</th>
           <th style="border: none;background-image:none;">Price</th>
           <th style="border: none;background-image:none;">Qty</th>
        </tr>
        
        <?php 

            $res1 = mysqli_query($cann,"SELECT * FROM `user_order` WHERE orderId=$row[orid]");
      while ($rows = mysqli_fetch_assoc($res1)) {
        ?>
       
        <tr>
          <td style="border: none;"><?php echo $rows['productname']; ?></td>
          <td style="border: none;">₹<?php echo $rows['Price']; ?></td>
          <td style="border: none;"><?php echo $rows['Quantity']; ?></td>
        
        <?php
       }?>
     </tr>
        </table></td>
        <td>₹<?php echo $row['ptotal']; ?></td>
        <td><?php echo $row['paymod']; ?></td>
         <td><?php echo $row['status']; ?></td>
       



          

      </tr>

      <?php

    }
     if ($i<1) {
       // code...
       echo "<h2>You haven't placed any orders yet</h2>";
     }
    
  }
  

      ?>

  </table>
</div>
<br>
</center>
</body>
<?php include('./footer/footer.php');?>
</html>
