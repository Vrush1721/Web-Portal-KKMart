<?php 

 include_once('dbconn.php'); 
$ctid = $_GET['ctid'];
$sql = "SELECT * FROM category where ctid='$ctid'";
$result = mysqli_query($cann, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $ctname=$row["ctname"];
   ;
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
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        .heading{
    display: none;
   }
    </style>
</head>
<body style="background-image: linear-gradient(to right,  #c2fcfc , #c2c5fc );">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>First Name</label>
                        <p><b><?php echo "$ctname"; ?></b></p>
                    </div>
                    
                    <p><a href="viewcate.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>