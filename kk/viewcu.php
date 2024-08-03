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
  width: 60%;
  border: 2px solid black;
}

th, td {
  border: 2px solid orange;
  text-align: left;
  padding: 8px;
}
th{
    text-align: center;
  background-image: linear-gradient(45deg, #ff4500, #ff4500);
}
td{
    text-align: center;
    background-color: white;
}
</style>
</head>
<?php include_once('adminnav.php'); ?>
<body>
<center>
<h1>Customer Details</h1>
<?php 
  include('csearch.php');
?>
<div style="overflow-x:auto;">
    
  <table>
    <tr>
                <th>Sr.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Action</th>
    </tr>
    <?php    
              $search=$_POST['search']; 
            $res = mysqli_query($cann,"select * from customer where fname like '%$search%' OR lname like '%$search%' ");
            while ($row = mysqli_fetch_array($res)) {
                ?>
            <tr>
                <td class="name"><?php echo $row["cid"];?></td>
                <td class="name"><?php echo $row["fname"]; ?></td>
                 <td class="name"><?php echo $row["lname"]; ?></td>
                <td class="name"><?php echo $row["mobno"]; ?></td>
                <td class="email"><?php echo $row["email"]; ?></td>
                 <td class="name"><?php echo $row["password"]; ?></td>
                  <td class="name"><?php echo $row["address"]; ?></td>
               
                <td class="delete"><center>

                  <a href="custview.php?email=<?php  echo $row['email']; ?>"style="..."><i class="fa fa-eye" style="color:black;"></i></a><br>
                     <a href="upcust.php?cid=<?php  echo $row['cid']; ?>"style="..."><i class="fa fa-edit" style="color:black;"></i></a><br>
                    <a href="delcust.php?cid=<?php echo $row['cid']; ?>" onclick="return confirm('Are you sure you want to delete this item')" style="..."><i class="fa fa-trash" style="color: black;"></i></a>
                </center></td>
    </tr>
      <?php
        }

            ?>
  </table>
  </center>
</div>
<br>
</body>
<?php include('./footer/footer.php');?>
</html>
