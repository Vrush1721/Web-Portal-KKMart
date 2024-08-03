<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration form</title>
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	
	   .body{
	   	padding: 30px;
	   	background-image: url("backgrouns1.jpg");
	   	width: 100%;
	   	height: 100vh;
	   	background-size: cover;
	   	background-position: center;

	   }
		.container{
			background-image: linear-gradient(45deg, #E9DCC9, #80daeb);
		
			width: 700px;
			height: 400px;
				
		   border: 2px solid whitesmoke;
			box-shadow: 0 15px 30px ;

			
		}
		.login-form{
			display: flex;
			padding: 20px;
		}
		input{
			width: 300px;
			height: 35px;
			text-align: center;
			font-size: 20px;
			border: none;
			border-radius: 10px;
	    outline-color: skyblue;
	    outline-width: 12px;
			background-color: white;
			
		}
   
	    .l{
			width: 300px;
			height: 40px;
      font-family: serif;
			border-radius: 10px;
			background: orange;
			font-size: 30px;
		}
		.label1,.label2{
			
			font-size: 130%;

		
		}
		.label2{
          margin-right: 20px;
		}
		.label1{
			margin-right: 24px;
		}
 a{
 	font-size: 20px;
 	text-decoration: none;

 }
table{
	padding: 20px;
}

table tr td{
	padding: 9px;
	
}
@media only screen and (max-width: 768px) {
         .login-form{
			display:block;
			
		}
		.container{
			width: 400px;
			height: 760px;
		}
		#foot{
    padding-top:20%;
   }
	}
</style>
</head>
<?php include_once('navbar.php'); ?>
<body>
	<div class="body">
   <center>
   <div class="container">
   	<form class="login-form" method="post" >
   	<div class="log1">
   		<img src="clog5.jpg" style="width: 320px; height: 360px;">
   	</div> 
   	   <div class="log1">
   	   <h1 style="background-color:pink;">Reset Password</h1><br><br>
   	   <label class="label1">New password</label><br>
   	   <input type="text" name="password" placeholder="new Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ><br><br><br>
   	  
      <a href="forgot.php">Forgot password ?</a>
   		<button type="submit" class="l" name="submit" onclick="myfunction()">update password</button><br><br>
   		<p><a href="custreg.php"><b style="color:blue">Create Account</b></a>&nbsp &nbsp New Customer?</p>
   	</div>
   	</form>
   	
   	</div>
   </div>
</center>
</div>
<?php
    include ('dbconn.php');

     if (isset($_POST['submit'])) {
       
       if (isset($_GET['token'])) {
       	
       	$token=$_GET['token'];
    
     $newpassword = mysqli_real_escape_string($cann,$_POST['password']);

     
     //$pass=password_hash($password, PASSWORD_BCRYPT);
   if ($newpassword) {
   	
              
    $updatequery="UPDATE demc set password='$newpassword' WHERE token='$token'";
    $result = mysqli_query($cann, $updatequery);

     if($result){
         
         header('location:lognewc.php');
       
      }else{
               echo "faild";
       }


}
}
}
?>
</body>
<?php include('./footer/footer.php');?>
</html>

