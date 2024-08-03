<?php

     
     include_once('dbconn.php'); 
       if (isset($_POST['submit'])) {
       
       
    $fname = mysqli_real_escape_string($cann,$_POST['fname']);
    $lname= mysqli_real_escape_string($cann,$_POST['lname']);
     $mono =mysqli_real_escape_string ($cann,$_POST['mono']);
    $email= mysqli_real_escape_string($cann,$_POST['email']);
    $address=mysqli_real_escape_string ($cann,$_POST['address']);
     $password = mysqli_real_escape_string($cann,$_POST['password']);
     
     //$pass=password_hash($password, PASSWORD_BCRYPT);
     $token=bin2hex(random_bytes(15)) ;
     
     
  $emailquery ="SELECT * FROM demc where email = '$email' ";
  $query=mysqli_query($cann,$emailquery);
  $emailcount=mysqli_num_rows($query);
if($emailcount> 0){
   
      ?>
      <script type="text/javascript">
        alert ("Email is Already Exist");
      </script>
      <?php   
      
}
else
   

    $sql =" INSERT INTO `demc`( `fname`, `lname`, `mono`, `email`, `address`, `password`, `token`, `status`) VALUES ('".$fname."','".$lname."','".$mono."','".$email."','".$address."','".$password."','".$token."','inactive')";
    $result = mysqli_query($cann, $sql);
     if($result){

      
         
         $subject = "Email Activation";
         $body = "Hi, $fname.$lname. click here to ativate youre account
          http://localhost/kk/activate.php?token=$token";
         $headers = "From: vrushrajpure9696@gmail.com";

         if (mail($email, $subject, $body, $headers)) {
             $_SESSION['msg']="chek youre mail $email";
             header('location:custlog.php');
           } else {
              echo "Email sending failed...";
            }


      ?>
      <!--<script type="text/javascript">
      	function myfunction(){
        alert("Registration Sucessfully");
        }
        window.location = "custlog.php";
      </script>-->

      <?php 
      }else{
       
       echo'<script type="text/javascript">
           alert("Oops \n Registration Unsucessfully ");
       </script>';

      
    
}


}
}

?>