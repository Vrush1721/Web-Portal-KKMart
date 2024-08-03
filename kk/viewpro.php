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
   width: 150px;
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
<h1>Product Details</h1>


<div class="obutton" style="overflow-x:auto;">
   <button ><a href="addpro.php"><b>Add Product</b></a></button><br><br>
  <table>
    <tr>
        <th id="poid">Pid</th>
        <th>Category</th>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Product Desciption</th>
        <th>Price</th>
        <th>MRP</th>
        <th>Delete</th>
    </tr>
 <?php
      include ('dbconn.php');
      $res = mysqli_query($cann,"select * from product");
      while ($row = mysqli_fetch_array($res)) {

      ?>
      <tr>
        <td class="id"><?php echo $row['pid']; ?></td>
        <td class="cid" name="ctid" value="'.$row['ctid'].'"><?php echo $row['ctid']; ?></td>
        <td class="im"><img id ="img1"  src="<?php echo $row['ppics']; ?>" style="width: 50px;"></td>
        <td class="name"><?php echo $row["pname"]; ?></td>
        <td><?php echo $row['pdescrip']; ?></td>
        <td class="price">₹<?php echo $row["pprice"]; ?></td>
        <td>₹<?php echo $row['MRP']; ?></td>

          <td class="delete"><center>
          
           <a href="proview.php?pid=<?php  echo $row['pid']; ?>"style="..."><i class="fa fa-eye" style="color:black;"></i></a><br>
                    <a href="uppro.php?pid=<?php  echo $row['pid']; ?>"style="..."><i class="fa fa-edit" style="color:black;"></i></a><br
>                    <a href="delpro.php?pid=<?php echo $row['pid']; ?>" onclick="return confirm('Are you sure you want to delete this item')" style="..."><i class="fa fa-trash" style="color: black;"></i></a>
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
