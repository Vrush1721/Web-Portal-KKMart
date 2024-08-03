<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>credit</title>

  <style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{   
  margin: 0;
  padding: 0;
  background: #eee;

  }
 
.container{
  margin: auto;
  padding: 90px;
  width: 1000px;
  height: 130vh;        
  max-width: 90%;
  margin-left: 20%;
    

}

.container form{
  width: 100%;
  height: 70%;
  padding: 20px;
  background: white;
  border-radius: 4px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background: rgba(255,255,255,0.8);

}

label{
  letter-spacing: 1px;
  font-size: 16px;
  margin-left: 5%;
}

/*.container{
  margin: 20px;
  width: 600px;
  padding: 30px 10px;
  max-width: 10%;
  position:absolute;
}*/



 .container h1{  
  margin-bottom: 8px;
  padding: 10px;
  color: #222;
  letter-spacing: 1px;

} 

.container form .form-control{

  width: 90%;
  height: 43px;
  background: white;
  border-radius: 1px;
  border: 1px solid silver;
  margin: 9px 0 10px 0;
  padding: 0 10px;
  margin-left: 5%;
}


.form-group{
  float: right;
  margin-top: -45%;
   margin-left: 29%;
  width: 400px;


}


.container form .submit1{
  margin-left: 6%;
  margin-top: 18px;
  /transform: translate(-50%);/
  width: 352px;
  height: 44px;
  border: none;
  outline: none;
  letter-spacing: 2px;
  background: red;
  cursor: pointer;
  font-size: 16px;
  text-transform: uppercase;
  color: #fff;  
}

.container form .submit1:hover {
  background-color: #f23f41;
}

h1 a{
  margin-left: 54%;
  font-size: 10px;
  text-decoration: none;
  color: red;
}


h1 a:hover{
  text-decoration: underline;
}

hr{
  color:    #F5F5F5;
  margin-bottom: 19px;
}

img{
  width: 50%;
  height: 60vh;
  float: left;
}

a{
  margin-left: -50%;
  text-decoration: none;
}
a:hover{
  text-decoration: underline;
}



  </style>
</head>
<body>


    <div class="container">     
<form action="" method="post">
  <a href="pay1.php">Back</a>

  <img src="pay2.jpg">
  <h1>payment
  </h1>

  <hr>
  <div class="form-group">
    <label>Card Number</label><br>
    <input type="text" id="no" class="form-control" name="cno" placeholder="1111-2222-3333-4444" pattern="[0-9]{16}" title="Please enter valid Contact Number[0-9 and 16 digit only]" style="..." required>
    <br>

    <label>Expiry</label><br>
    <input type="text" id="ex" class="form-control" name="expiry" placeholder="MM/YY" required><br>

      <label>CVV</label><br>
    <input type="text" id="c" class="form-control" name="cvv" placeholder="CVV" pattern="[0-9]{3}" title="Please enter valid Contact Number[0-9 and 3 digit only]" style="..." required>
    

    <br>

     <label>Name on Card</label><br>
    <input type="text" id="cn" class="form-control" name="nameoc" placeholder="Enter Name as on Card" pattern="[A-Za-z]+" title="Please enter valid first name[a-z only]" style="..." required>
    
    <input type="submit" class="submit1" name="submit" value="Pay Now">

</form>
</div>


<?php

     
     include_once('dbconn.php'); 
       if (isset($_POST['submit'])) {
       
       
    $cno = $_POST['cno'];
    $expiry= $_POST['expiry'];
    $cvv= $_POST['cvv'];
     $nameoc = $_POST['nameoc'];
  
   

    $sql =" Insert into payment(cno,expiry,cvv,nameoc) values('".$cno."','".$expiry."','".$cvv."','".$nameoc."')";
    $result = mysqli_query($cann, $sql);
     if($result){
      ?>
      <script type="text/javascript">
        alert ("Create Account Successfully");
       window.location="home.php";

      </script>
      <?php 

    
      }else{
       ?>
       <script type="text/javascript">
           alert("Something Is Wrong");

       </script>

       <?php  
    
}
}


?>

</body>
</html>