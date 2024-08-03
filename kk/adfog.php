<?php
    include ('dbconn.php');

      if (isset($_POST['login'])) {
       
       
    
    $username= mysqli_real_escape_string($cann,$_POST['username']);
 
     
     //$pass=password_hash($password, PASSWORD_BCRYPT);
   
     
     
  $emailquery ="SELECT * FROM admin where username = '$username' ";
  $query=mysqli_query($cann,$emailquery);

  $emailcount=mysqli_num_rows($query);
if($emailcount){

          $userdata=mysqli_fetch_array($query);
          $username=$userdata['username'];
          
          $token=$userdata['token'];
         $subject = "Recovery email";
         $body = "Hi, $username. click here to reset your Password
          http://localhost/kk/areset.php?token=$token";
         $headers = "From: vrushrajpure9696@gmail.com";

         if (mail($username, $subject, $body, $headers)) {
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
            height: 340px;
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
        <h1 >Verify Email</h1><br><br>
        <p style="padding-right: 68%;">Enter Email</p>
         <!--<i class="fa fa-user icon" id="use" ></i>-->
         <br>
        <input type="username" name="username"   required ><br><br>
        
         <p><a href="aforgot.php" style="padding-right: 180px;">Forgot password?</a></p><br>
        <button class="sign" type="submit" name="login" onclick="myfunction()">Verify</button><br>
     <p><a href="kklogin.php"><b style="color:blue;" >Sign In</b></a></p>
    </form>
    
    </div>
   </div>
   </div>
</center>


</body>
<?php include_once('alogconn.php'); ?>
<?php include('./footer/footer.php');?>
</html>
