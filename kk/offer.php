<?php
      include_once('adminnav.php'); 

  include_once('dbconn.php'); 

    $msg='';
   if (isset($_POST['upload'])) {
   	$pimg=$_FILES['pimg']['name'];
   	$path=$pimg;
   	$sql=$cann->query("INSERT INTO slides(pimg) VALUES ('$path')");
   	if ($sql) {
   		
   		move_uploaded_file($_FILES['pimg']['name'],$path);
   		$msg="image uploaded";
   	}
   	else{
   		$msg="img not uploaded";
   	}
   }

   //$result=$link->query("select pimg from slides");

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Offers</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  
     .body{
      
      padding: 2%;
      width: 100%;
   
      background-size: cover;
      background-position: center;
     

     }
    .containers{
     background-image: linear-gradient(170deg,#fc5a8d, #666699);
      width: 400px;
      height: 370px;
        padding: 40px;
       border: 2px solid whitesmoke;
      box-shadow: 0 15px 30px ;
      z-index: -1;

      
    }
    
    input{
      width: 200px;
      height: 46px;
      text-align: center;
      font-size: 20px;
      border: none;
      border-radius: 8px;
      outline-color: skyblue;
      background-color: white;
      font-size: 17px;
      
    }
   
      
    p{
      
      font-size: 125%;
    }
 a{
  font-size: 25px;
  

 }

@media only screen and (max-width: 768px) {
         .reg-form{
      display:block;
      
    }
    .containers{
      width: 400px;
      height: 300px;
    }
    #foot{
    padding-top:30%;
   }
  }
</style>
</head>

<body>
  <div class="body">
   <center>
   <div class="containers">
   
      <div class="log1" >
      <form action="" method="post" enctype="multipart/form-data">
      	<h1>Add Offer</h1><br><br>
   				<div class="form-group">
   					<input type="file" name="pimg" class="form-control p-1">
   				</div>
   				<div class="form-group">
   					<input type="submit" name="upload" class="btn btn-warning" value="Upload Image">
   				</div>
   				<div class="form-group">
   					<h1><?= $msg; ?></h1>
   				</div>
   			</form>
         
  

      
    </div>
   
   </div>
</center>
</div>

</body>
<?php include('./footer/footer.php');?>
</html>

