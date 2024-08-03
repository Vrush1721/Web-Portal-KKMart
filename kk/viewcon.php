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

</style>
</head>
<?php include_once('adminnav.php'); ?>
<body>
<center>
<h1>Feedback Details</h1>


<div style="overflow-x:auto;">
  <table>
    <tr>
                <th>Sr.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
                <th>Subject</th>
            </tr>
 <?php
            $res = mysqli_query($cann,"select * from contact");
            while ($row = mysqli_fetch_array($res)) {
                ?>
            <tr>
                <td class="conid"><?php echo $row["conid"];?></td>
                <td class="frname"><?php echo $row["frname"]; ?></td> 
                <td class="laname"><?php echo $row["laname"]; ?></td>
                <td class="emailid"><?php echo $row["emailid"]; ?></td>
                <td class="sub"><?php echo $row["subject"]; ?></td>   
                
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
