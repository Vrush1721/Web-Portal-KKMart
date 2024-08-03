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
  width: 30%;
  border: 2px solid black;
}

th, td {
  border: 2px solid orange;
  text-align: left;
  padding: 8px;
}
td{
    text-align: center;
  background-color: white;
}
th{
    text-align: center;
  background-image: linear-gradient(45deg, #ff4500, #ff4500);
}
.obutton button{
  font-size: 23px;
  height: 45px;
   width: 160px;
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
<h1>Category Details</h1>


<div class="obutton" style="overflow-x:auto;">
      <button ><a href="addcategory.php"><b>Add category</b></a></button><br><br>
  <table>
    <tr>
                 <th>Sr.No</th>
                <th>Category Name</th>
                <th>Action</th>
    </tr>
     <?php
            $res = mysqli_query($cann,"select * from category");
            while ($row = mysqli_fetch_array($res)) {
                ?>
            <tr>
                <td class="ctid"><?php echo $row["ctid"];?></td>
                <td class="name"><?php echo $row["ctname"]; ?></td>    
                <td class="delete"><center>
                      
                    <a href="delcat.php?ctid=<?php echo $row["ctid"]; ?>"onclick="return confirm('Are you sure you want to delete this item')" style="..."><i class="fa fa-trash" style="color: black;"></i></a>
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
