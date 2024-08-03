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
          margin-right: 209px;
		}
		.label1{
			margin-right: 240px;
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
   	   <h1 style="background-color:pink;">Recover your account</h1><br><br>
   	   <label class="label1">Email</label><br>
   	   <input type="text" name="email"><br><br><br>
   	   <br><br><br>
      
   		<button type="submit" class="l" name="submit" onclick="myfunction()">Send mail</button><br><br>
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
       
       
    
    $email= mysqli_real_escape_string($cann,$_POST['email']);
 
     
     //$pass=password_hash($password, PASSWORD_BCRYPT);
   
     
     
  $emailquery ="SELECT * FROM demc where email = '$email' ";
  $query=mysqli_query($cann,$emailquery);

  $emailcount=mysqli_num_rows($query);
if($emailcount){

          $userdata=mysqli_fetch_array($query);
          $fname=$userdata['fname'];
          $lname=$userdata['lname'];
          $token=$userdata['token'];
         $subject = "Password Reset";
         $body = "Hi, $fname.$lname. click here to reset your Password
          http://localhost/kk/reset.php?token=$token";
         $headers = "From: vrushrajpure9696@gmail.com";

         if (mail($email, $subject, $body, $headers)) {
            ?>

            <script type="text/javascript">
      	function myfunction(){
        alert("mail send Sucessfully");
        }
        
      </script>
            <?php
           } else {
              ?>

              <script type="text/javascript">
      	function myfunction(){
        alert("mail send UnSucessfully");
        }
        
      </script>
              <?php
            }


      ?>
      

      <?php 
      }
      else{
      	echo"No email found";
      }
}
        
?>
</body>
<?php include('./footer/footer.php');?>
</html>

