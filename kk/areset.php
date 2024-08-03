<?php session_start();  ?>
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
            height: 370px;
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
        
        <h1 >Reset  Password</h1><br><br>
       <label class="label1" style="font-size:25px; padding-right: 35%;">New password</label><br><br>
       <input type="text" name="password" placeholder="new Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ><br><br><br>
        
         <p><a href="adfog.php" style="padding-right: 180px;">Forgot password?</a></p><br>
       <button type="submit" class="sign" name="submit" onclick="myfunction()">update password</button><br><br>
     
    </form>
    
    </div>
   </div>
   </div>
</center>



<?php
    include ('dbconn.php');

     if (isset($_POST['submit'])) {
       
       if (isset($_GET['token'])) {
        
        $token=$_GET['token'];
    
     $newpassword = mysqli_real_escape_string($cann,$_POST['password']);

     
     //$pass=password_hash($password, PASSWORD_BCRYPT);
   if ($newpassword) {
    
              
    $updatequery="UPDATE admin set password='$newpassword' WHERE token='$token'";
    $result = mysqli_query($cann, $updatequery);

     if($result){ ?>
         <script type="text/javascript">
        function myfunction(){
        alert("Password changed Sucessfully");
        }
        window.location = "kklogin.php";
      </script>
         
       <?php

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

