<?php
     
    
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db_name = "kk";

     $cann = new mysqli($servername ,$username ,$password ,$db_name);

     if ($cann->connect_error) {
    die("connection failed:".$cnn->connect_error);
  }
    
  //  else
        //{
      // echo "connected with database";


       // }
     
  ?>
