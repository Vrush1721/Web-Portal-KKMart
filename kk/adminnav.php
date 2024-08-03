<?php 
include_once('dbconn.php'); 
session_start();
            error_reporting();
      $user=$_SESSION['username'];
      if($user == true){
            //header("location:adminnav.php");
      }
      else
      {
        header("location:kklogin.php");
      
      }

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
body {
  background-image: url("as1.jpg");
  background-size: cover;
     height: 100%;
     background-position: center;
     background-repeat: no-repeat;
  margin: 0;

  font-family: Arial, Helvetica, sans-serif;
}
.heading{
  font-size: 50px;
  font-weight: bold;
  margin-left: 50%;
  margin-top: 15%;
  letter-spacing: 3px;
}
.topnav {
  overflow: hidden;
  background-color: #ff4500;
  position: sticky;
  top: 130px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: orange;
  color: black;
}

.topnav a {
  font-size: 20px;
  color: black;
}

.topnav .icon {
  display: none;
}
#logout{
  float: right;
}

@media screen and (max-width: 768px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 768px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .logouts{
   margin-right: 77%;
  }
  .topnav{
    position: sticky;
    top: auto;
 
  }
}
</style>
</head>
<body>
  <div id="mid" style="position: sticky;top: 0;">
    <img src="kkbord.jpg" alt="" class="logo" style="width:100%;height:130px; padding: 1px; position:sticky; top:1px;">
       
  </div>
  

<div class="topnav" id="myTopnav">
  <a href="adminnav1.php" ><b>Home</b></a>
  <a href="viewof.php"><b>Offers</b></a>
  <a href="viewcate.php"><b> Category</b></a>
  <a href="viewpro.php"><b> Product</b></a>
  <a href="viewcust.php"><b> Customer</b></a>
  <a href="viewcon.php"><b>Contacts</b></a>
  <a href="vieworder.php"><b> Order</b></a>
  <a href="" id="logout1">
  <?php 
  
     
       
   if (isset($_SESSION['username'])) {
                // code...
              echo "<i class='fas fa-user-tie ' style='font-size:20px ; '><b>Hello , ".$_SESSION['username']."</b></i>";
            }?></a>
   
  <a href="logout.php" id="logout" class="logouts"><i class='fa fa-power-off' style='font-size:20px ; '><b>Logout</b></i></a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
