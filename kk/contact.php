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
      
      padding: 2%;
      width: 100%;
   
      background-size: cover;
      background-position: center;
     

     }
    .container{
      background-image: linear-gradient(45deg, #e2725b, #80daeb);
    
      width: 700px;
      height: 550px;
        
       border: 2px solid whitesmoke;
      box-shadow: 0 15px 30px ;

      
    }
    .reg-form{
      display: flex;
      padding: 30px;
    }
    input{
      width: 300px;
      height: 46px;
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
      background: pink;
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
      height: 940px;
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
   <div class="container">
    <form class="reg-form" method="post" action="index.php">
      <div class="log1">
        <img src="con1.jpg" style="height: 410px; width: 300px">
      </div>
      
      <div class="log1" style="margin-left: 20px;">
      <h1 style="background-color:pink">Contact Us</h1><br>
         <input type="text" name="frname" placeholder="First Name"  required ><br><br>
         <input type="text" name="laname" placeholder="Last Name"  required ><br><br>
         <input type="text" name="mob" placeholder="Mobile No"  required ><br><br>
         <input type="Email" name="emailid" placeholder="Email"  required ><br><br>
          <input type="text" name="subject" placeholder="massage" style="height:90px;" required ><br><br>
        
  

       
      <button type="submit" class="reg " name="submit" onclick="myfunction()">Submit</button><br><br>
      
    </div>
    </form>
    
    </div>
   </div>
</center>
</div>

</body>

</html>
<?php

     
     include_once('dbconn.php'); 
       if (isset($_POST['submit'])) {
       
       
    $frname = $_POST['frname'];
    $laname= $_POST['laname'];
    $mob= $_POST['mob'];
    $emailid= $_POST['emailid'];
    $subject= $_POST['subject'];
    $token=bin2hex(random_bytes(15)) ;
     
    
   

    $sql =" Insert into contact(frname,laname,mob,emailid,subject,token) values('".$frname."','".$laname."','".$mob."','".$emailid."','".$subject."','".$token."')";
    $result = mysqli_query($cann, $sql);
     if($result){
         $frname = $_POST['frname'];
    $laname= $_POST['laname'];
    $mob= $_POST['mob'];
    $emailid= $_POST['emailid'];
    $sub= $_POST['subject'];
     $to_email = "vrushrajpure9696@gmail.com";
$subject = " from.$emailid";
$body = "Hello,I am.$frname $laname\nMobile No:$mob\n Massage : $sub\nclick here to view feedback
          http://localhost/kk/viewcon.php?token=$token";;
$headers = "From: $emailid";

if (mail($to_email, $subject, $body,$headers)) {
    //echo "Email successfully sent to $to_email...";
 ?>
<script type="text/javascript">
       
        alert("Feedback send Sucessfully");
        
      
      </script>
      <?php
}
     
      }else{
       
       echo'<script type="text/javascript">
           alert("Oops \n Registration Unsucessfully ");
       </script>';

      
    
}


}


?>