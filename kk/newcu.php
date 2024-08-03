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
	   	padding: 40px;
	   	background-image: url("backgrouns1.jpg") ;
	   	width: 100%;
	   	height: 100vh;
	   	background-size: cover;
	   	background-position: center;
	   

	   }
		.container{
			background-image: linear-gradient(45deg, #E9DCC9, #80daeb);
		
			width: 670px;
			height: 450px;
				
		   border: 2px solid whitesmoke;
			box-shadow: 0 15px 30px ;

			
		}
		.reg-form{
			display: flex;
			padding: 30px;
		}
		input{
			width: 300px;
			height: 30px;
			text-align: center;
			font-size: 20px;
			border: none;
			border-radius: 8px;
			outline-color: skyblue;
			background-color: white;
			font-size: 17px;
			
		}
   
	    .reg{
			width: 300px;
			height: 40px;
            font-family: serif;
			border-radius: 10px;
			background: orange;
			font-size: 30px;
		}
		p{
			
			font-size: 125%;
		}
 a{
 	font-size: 25px;
 	

 }
table{
	padding: 20px;
}

table tr td{
	padding: 9px;
	
}
@media only screen and (max-width: 768px) {
         .reg-form{
			display:block;
			
		}
		.container{
			width: 400px;
			height: 830px;
		}
		#foot{
    padding-top:30%;
   }
	}
</style>
</head>
<?php include_once('navbar.php'); ?>
<body>
	<div class="body">
   <center>
   <div class="container">
   	<form class="reg-form" method="post" action="newcur.php">
   		<div class="log1">
   			<img src="signup-image.jpg" style="height: 380px; width: 300px">
   		</div>
   		
      <div class="log1" style="margin-left: 20px;">
   		<h1 style="background-color:pink">Register</h1><br><br>
   		
             <div class="name" style="display:flex;">
		       <input type="text" name="fname" placeholder="First Name" pattern="[a-zA-Z'-'\s]*" title="Name must type in a-zA-Z'-format" style="width:48%;" required > 
			   <input type="text" name="lname" placeholder="Last Name" pattern="[a-zA-Z'-'\s]*" title="Name must type in a-zA-Z'-format" style=" width: 48%;  " required>
			 </div><br>
	
		<input type="number" name="mono" placeholder="Mobile No"  pattern="^\d{10}$" title="Mobile number must contain 10 number" required ><br><br>

         <input type="Email" name="email" placeholder="Email"  required ><br><br>
         <input type="text" name="address" placeholder="Address"  required ><br><br>
          <input type="password" name="password" placeholder="Set Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required ><br><br>
        
	

   		 
   		<button type="submit" class="reg " name="submit" onclick="myfunction()">Register</button><br><br>
   		<p><a href="lognewc.php"><b style="color:blue;" >Sign In</b></a>&nbsp &nbsp Alredy Customer?</p>
   	</div>
   	</form>
   	
   	</div>
   </div>
</center>
</div>

</body>
<?php include('./footer/footer.php');?>
</html>

<?php include_once('footer.php'); ?>