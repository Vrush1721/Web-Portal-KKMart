<?php 
session_start();
include_once('dbconn.php'); 


?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-image: linear-gradient(45deg, #ff4500, #ff4500);

}

.topnav a {
  float: left;
  display: block;
  color:black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.search{
    padding: 26px;
    margin-left: 35%;
   
}
.search1{
    position: sticky;
    align-items: center;
   height: 10vh;
    background-image: url(s3.jpg);
    background-size: cover;
    
     background-position: center;
     background-repeat: no-repeat;
}


@media screen and (max-width: 760px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }

}
@media only screen and (max-width: 768px) {
  .search{
    padding: 26px;
    margin-left: 6%;
   
}
.search1{
    align-items: center;
   height: 10vh;
  
}
}
@media screen and (max-width: 600px) {
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
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
<div class="search1" > 
  <div class="search" >       
             <form method="post" action="search.php">

                 <input type="search" name="search" placeholder="Search" style="width: 300px;border-radius: 5px; height: 30px;"> 
                 <button type="submit" style="width: 50px; height: 30px;border-radius: 5px;"> <i class="fa fa-search"></i> </button>  
            </form>
            
           </div>
       </div>
<div class="topnav" id="myTopnav">
  <a href="Homepage.php" class="active"><i class='fas ' style='font-size:20px ; '>Home</i></a>
  <div class="dropdown">
    <button class="dropbtn" style="color:black;"><i class='fas ' style='font-size:20px ; '>All Category</i>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <?php
               $query="select* from category";
               $query_run=mysqli_query($cann,$query) ;
               if (mysqli_num_rows($query_run)>0) {
               ?>
              
                    <?php 
                     foreach ($query_run as $item) {
                        $x=$item['ctid'];
                        ?>
                       
                       <a href="household.php?cid='<?php echo"$x"; ?>'"><?php echo $item['ctname']; ?></a>
                       

                       <?php 
                      // echo "<li><a href=\"sample.php?cid=".$x."\" >$item['ctname'] </a> </li>";     
                     }
                 ?>
      
    </div>
    <?php 
                      // echo "<li><a href=\"sample.php?cid=".$x."\" >$item['ctname'] </a> </li>";     
                     }
                 ?>
  </div> 
 
  
  <a href="about.php"><i class='fas ' style='font-size:20px ; '>About</i></a>
  <a href="cart.php"><i class='fas fa-shopping-cart' style='font-size:20px ; '>Cart</i>
         <?php
         
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>


<?php echo "<b>(" .$cart_count.")</b>"; ?></a>
<?php
}
?>  
  <a href="#about" class="signin"><?php 
            if (isset($_SESSION["email"])) {
                // code...
                  echo "<i class='fas fa-user-tie' style='font-size:20px;'><b style='font-size:20px ; '>Hello,</i>".$_SESSION["email"]."</b>";
                echo"&nbsp&nbsp&nbsp&nbsp<a href='logoutc.php'><i class='fa fa-power-off' style='font-size:20px ; '><b class='navm'>Logout</b></i></a></h2>";
            }
            else
            {
              ?>
                 <a href='custlog.php'><b class='navm'>Sign In</b></a>
                 <?php
            }
            ?></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

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
