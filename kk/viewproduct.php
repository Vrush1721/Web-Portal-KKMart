<?php 

include_once('dbconn.php'); 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>view Products</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style type="text/css">
 #foot{
  padding-top: 200%;
 }
 .form-control{
    width: 50px;
 }

 	.pp{
        height: 0px;
       
    }
.mainc{
    padding-left: 15%;
}
     .product {
    background-color: white;
    width: 20%;
    height: 360px;
    margin: 15px;
    
    box-sizing: border-box;
    float: left;
    text-align: center;
   
    font-family: Nunito Sans;
   
    font-size: 18px;
   
    box-shadow: 0 15px 30px ;
    transition: .4s;
}


img{
    height: 170px;
}
.buy-1{
   background-color: orange;
   width: 200px;
   height: 30px;
   border-radius: 13px;
   font-size: 20px;
}

@media only screen and (max-width: 768px) {
.product {
    width: 43%;
    height: 340px;

}
.mainc{
    padding-left: 0%;
}
}
 </style>
</head>
<?php include_once('navbar.php'); ?>
<body  >

    <h1 style="text-align:center; color:purple; padding-top: 5%;"></h1>
    <?php
      
 
              
                $query = "SELECT * FROM product ORDER BY pid ASC";
                $result = mysqli_query($cann, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            

    <div class="mainc">
   

<div class="pp"> 
    <h1 style="text-align:center">All Products</h1>
<div class="pp1" style="padding-top:40px;"> 
      <form method="post" action="cart.php?action=add&pid=<?php echo $row["pid"]; ?>" enctype="multipart/form-data">
     <div class="product" >
    <br>
       <img src="<?php echo $row[ "ppics" ]; ?>" style="width: 150px; height:120px;"> 
      <h2 name="pname"><?php echo $row["pname"]; ?> </h2>  
        <p style="font-size:16px;"><?php echo $row["pdescrip"]; ?></p>
                         <h6 class="mrp" name="MRP" style="font-size:15px;">MRP  :<del>₹<?php echo $row["MRP"]; ?></del></h6>
                         <h6 class="price" name="pprice" style="font-size:18px;">price  : ₹<?php echo $row["pprice"]; ?>  </h6>
                        <input type="hidden" name="ppics" value="<?php echo $row["ppics"]; ?>" />
                        <input type="hidden" name="pname" value="<?php echo $row["pname"]; ?>" />
                         <input type="hidden" name="pprice" value="<?php echo $row["pprice"]; ?>" >
                        <input type="number" name="quantity" value="1" min="1" class="form-control" ><br><br></b>
                          <input type="submit" name="add_to_cart" onclick="myFunction()" class="btn btn-success" style="background-color: orange; width: 200px;height: 30px;border-radius: 9px;font-size: 20px;" value="Add to Cart" >

     
     </div>
     </form>
 </div>
</div>
</div>
   
   
  
 <?php
                    }
                }
            ?>
</body>
</html>
<?php include('./footer/footer.php');?>