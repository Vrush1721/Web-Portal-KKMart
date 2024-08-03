<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Category</title>
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	#foot{
    padding-top: 10%;
   }
   .heading{
    display: none;
   }
   #adminh1{
          display: none;
   }
	   .body{

	   	padding: 30px;
	   	
	   }
		.container{
		background-image: linear-gradient(170deg,#fc5a8d, #666699);

			
			width: 360px;
			height: 330px;
		   border: 2px solid whitesmoke;
			box-shadow: 0 15px 30px ;

			
		}
		input{
			width: 300px;
			height: 30px;
			text-align: center;
			border: none;
			border-radius: 7px;
			background-color: white;	
					
		}
   
		.add{
			width: 250px;
			height: 48px;
      font-family: serif;
			border-radius: 16px;
			background: orange;
			font-size: 30px;
		}
			p{
			
			font-size: 130%;
		}
		
 

	</style>

</head>
<?php include_once('adminnav.php'); ?>
<body>
	
	<div class="body">
   <center>

   <div class="container">
   	<form class="login-form" method="post">
   		<br>
   		<h1 >Add Category</h1><br>
   		
   		<p style="padding-right: 40%;">Name of category</p>
   		<input type="text" name="ctname"   required ><br><br>
   		
   		<button class="add" type="submit" value="submit" name="add">ADD</button><br><br><br>
   	</form>
   	
   	</div>
   </div>
   </div>
</center>

</body>

</html>
<?php
     
    
     include_once('dbconn.php'); 
     
     
  
       if (isset($_POST['add'])) {
       
     
     $ctname = $_POST['ctname'];
    
    
   

    $sql =" INSERT INTO category( `ctname`) VALUES ('".$ctname."')";

    
  
      $result = mysqli_query($cann, $sql);
     if($result){
      ?>
      <script type="text/javascript">
        
        window.location="viewcate.php";
      </script>
      <?php 
      }else{
       ?>
       <script type="text/javascript">
           alert("data not inserted");
       </script>

       <?php  
    
}
}

include_once('footer/footer.php'); 
?>