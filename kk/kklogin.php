
<?php
    session_start();
    include ('dbconn.php');

      if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admin WHERE username='".$username."' and password='".$password."' limit 1";
        
        $result  = mysqli_query($cann, $sql);

       $c= mysqli_num_rows($result);
       if ($c==1) {

       	$_SESSION["username"]=$username;
       	?>
         <script type="text/javascript">
           
          window.location = "adminnav1.php";

       </script>

       <?php
              }

        else{
                   ?>
                   <script type="text/javascript">
                    function myfunction(){
           alert("Please enter correct username and password");
           
       }
       </script>
           <?php
                  
        }
   
                   
                }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Admin Login form</title>
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	#foot{
    padding-top: 10%;
   }
	   .body{

	   	padding: 40px;
	   	
	   	
	   }
		.container{
background-image: linear-gradient(45deg, #E9DCC9, #ffdab9);
			
			width: 350px;
			height: 440px;
		   border: 2px solid whitesmoke;
			box-shadow: 0 15px 30px ;

			
		}
		input{
			width: 300px;
			height: 30px;
			text-align: center;
			border: none;
			border-radius: 10px;
			background-color: white;	
			outline: none;		
		}
   
		.sign{
			width: 250px;
			height: 48px;
      font-family: serif;
			border-radius: 19px;
			background: orange;
			font-size: 30px;
		}
			p{
			
			font-size: 130%;
		}
		
 a{
 	font-size: 20px;
 	

 }
.login-form #use{
            position: relative;
            display: inline;
            left: -40%;
            top: -100%;
            color: gray;
        }
 .login-form #pass{
            position: relative;
            left: 10%;
            top: 62%;
            color: gray;
        }
@media only screen and (max-width: 768px) {
	.login-form #use{
		left: 20%;
	}
	.login-form #pass{
		left: 20%;
	}
	
}
	</style>
</head>
<?php include_once('navbar.php'); ?>
<body>
	
	<div class="body">
   <center>

   <div class="container">
   	<form class="login-form" method="post"  >
   		<br>
   		<h1 >Admin Login</h1><br><br>
   		<p style="padding-right: 68%;">Username</p>
   		 <!--<i class="fa fa-user icon" id="use" ></i>-->
         <br>
   		<input type="username" name="username"   required ><br><br>
   		<p style="padding-right: 68%;">Password</p><br>
   		<!--<i class="fa fa-lock fa-lg" id="pass" ></i>-->
   		<input type="password" name="password" required><br><br><br>
   		 <p><a href="adfog.php" style="padding-right: 180px;">Forgot password?</a></p><br>
   		<button class="sign" type="submit" name="login" onclick="myfunction()">sign In</button>
     
   	</form>
   	
   	</div>
   </div>
   </div>
</center>



</body>
<?php include_once('alogconn.php'); ?>
<?php include('./footer/footer.php');?>
</html>
