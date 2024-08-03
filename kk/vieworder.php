<?php 

include_once('dbconn.php'); 

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
<?php include_once('adminnav.php'); ?>
<body>
<center>
<h1>Order Details</h1>
<div class="obutton">
  <button ><a href="vieworder.php" >All</a></button>
  <button ><a href="viewp.php">Pending</a></button>
<button ><a href="viewd.php">Delivered</a></button>
<button ><a href="ordec.php">Cancel</a></button>
</div>
<?php 
  include('osearch.php');
?>
<br>
<div style="overflow-x:auto;">
  <table>
  <tr>
         <th id="poid">oid</th>
        <th>customer name</th>
        <th>Email</th>
        <th>Mobile no</th>
        <th>address</th>
        <th>City</th>
        <th>State</th>
        <th>zip</th>
      <th>Order items</th>
        <th>total</th>
        <th>Paymod</th>
        <th>status</th>
         <th>Date-time</th>
        <th>Action</th>
      </tr>
  <?php
      include ('dbconn.php');  
      $res = mysqli_query($cann,"select * from orders");
      while ($row = mysqli_fetch_assoc($res)) {

      ?>
      <tr>
        <td class="id"><?php echo $row['orid']; ?></td>
        <td class="cid" name="ctid" value="'.$row['ctid'].'"><?php echo $row['funame']; ?></td>
        <td class="name"><?php echo $row["email"]; ?></td>
        <td><?php echo $row['mobno']; ?></td>
        <td class="price"><?php echo $row["address"]; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['zip']; ?></td>
       <td>
        <table style="border: none;">
        <tr >
           <th style="border: none;background-image:none;">pname</th>
           <th style="border: none;background-image:none;">Price</th>
           <th style="border: none;background-image:none;">Qty</th>
        </tr>
        <?php 

            $res1 = mysqli_query($cann,"SELECT * FROM `user_order` WHERE orderId=$row[orid]");
      while ($rows = mysqli_fetch_assoc($res1)) {?>
      <tr>
          <td style="border: none;"><?php echo $rows['productname']; ?></td>
          <td style="border: none;">₹<?php echo $rows['Price']; ?></td>
          <td style="border: none;"><?php echo $rows['Quantity']; ?></td>
        
        <?php
       }?>
     </tr>
        </table></td>
        <td><?php echo $row['ptotal']; ?></td>
        <td><?php echo $row['paymod']; ?></td>
         <td><?php echo $row['status']; ?></td>
        <td><?php echo $row['date']; ?></td>



          <td class="delete"><center>
           
                  <a href="uporder.php?orid=<?php  echo $row['orid']; ?>"style="..."><i class="fa fa-edit" style="color:black;"></i></a>
                  <a href="delord.php?orid=<?php echo $row['orid']; ?>" onclick="return confirm('Are you sure you want to delete this item')" style="..."><i class="fa fa-trash" style="color: black;"></i></a>
        </center></td>

      </tr>

      <?php

    }

      ?>

  </table>
</div>
<br>
</center>
</body>
<?php include('./footer/footer.php');?>
</html>
