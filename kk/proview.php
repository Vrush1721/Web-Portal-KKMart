<?php 

 include_once('dbconn.php'); 
$pid = $_GET['pid'];
$sql = "SELECT * FROM product where pid='$pid'";
$result = mysqli_query($cann, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $ppics=$row["ppics"];
     $pname = $row["pname"];
    $pdescrip = $row["pdescrip"];
    $pprice=$row["pprice"];
    $MRP=$row["MRP"];
  }
} else {
  echo "0 results";
}

mysqli_close($cann);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    #foot{
        padding-top: 3%;
    }
    .heading{
    display: none;
   }
    .wrapper{
        padding-top: 6%;
    }
        .formv{

            background-color: white;
                       box-shadow: 0 15px 30px ;
            width: 25%;
            height: 490px;
            
            padding: 20px;
            box-sizing: border-box;
            font-size: 20px;
        }
        .form-group b label{
            float: left;
        }
        #adminh1{
          display: none;
   }
        
    </style>
</head>
<?php include_once("adminnav.php") ?>
<body >
    <div class="wrapper">
      
            <center>
                 
              <form class="formv">
                  <h1 class="mt-5 mb-3" style="color:purple;"><b>Products</b></h1>
                    <div class="form-group">
                      <b>    <label class="clabel" style="color:red; ">Product  :</label>
                   <img src="<?php echo "$ppics"; ?>" style="width: 70px;"> </b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Product Name  :</label>
                        <?php echo "$pname"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Product Description :</label> <?php echo "$pdescrip"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Product Price :</label>
                        <?php echo "$pprice"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Product MRP :</label>
                        <?php echo "$MRP"; ?></b>
                    </div>
                   
                   <a href="viewpro.php" class="btn btn-primary" style="font-size: 20px;">Back</a> 
                   
              </form>
                    
            </center>  
                  
        
    </div>
</body>
</html>
<?php include('./footer/footer.php');?>