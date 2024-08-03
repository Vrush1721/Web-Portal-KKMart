<?php 

 include_once('dbconn.php'); 

$email = $_GET['email'];
$sql = "SELECT * FROM customer where email='$email'";
$result = mysqli_query($cann, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $fname=$row["fname"];
     $lname = $row["lname"];
    $mobno = $row["mobno"];
    $email = $row["email"];
    $password=$row["password"];
    $address=$row["address"];
  }
} else {
  echo "0 results";
}

mysqli_close($can);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .heading{
    display: none;
   }
    #foot{
        padding-top: 6%;
    }
    .wrapper{
        padding-top: 6%;
    }
        .formv{

            background-color: white;
                       box-shadow: 0 15px 30px ;
            width: 25%;
            height: 480px;
            
            padding: 20px;
            box-sizing: border-box;
            font-size: 20px;
        }
        #adminh1{
          display: none;
   }
   .form-group b label{
    float: left;
   }
        
    </style>
   
</head>
<?php include_once("adminnav.php") ?>
<body >
    <div class="wrapper">
      
            <center>
              <form class="formv">
                  <h1 class="mt-5 mb-3" style="color:purple;"><b>View Customer</b></h1>
                    <div class="form-group">
                      <b>    <label class="clabel" style="color:red;">First Name  :</label>
                    <?php echo "$fname"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Last Name  :</label>
                        <?php echo "$lname"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Mobile Number :</label> <?php echo "$mobno"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Gmail  :</label>
                        <?php echo "$email"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">Password  :</label>
                        <?php echo "$password"; ?></b>
                    </div>
                    <div class="form-group">
                       <b> <label class="clabel" style="color:red;">address  :</label>
                        <?php echo "$address"; ?></b>
                    </div>
                    <a href="viewcust.php" class="btn btn-primary" style="font-size: 20px;">Back</a> 
              </form>
                    
            </center>  
                  
        
    </div>
</body>
</html>
<?php include('./footer/footer.php');?>