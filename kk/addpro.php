<?php 

include_once('dbconn.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add products</title>
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	#foot{
    padding-top: 1%;
   }
   #adminh1{
          display: none;
   }
	   .body{
        
	   	padding: 30px;
	   	
	   }
		.container{
			background-image: linear-gradient(170deg,#fc5a8d, #666699);
			
			width: 350px;
			height: 758px;
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
			outline-color: #4169e1;		
		}
   
		.sign{
			width: 250px;
			height: 48px;
      font-family: serif;
			border-radius: 15px;
			background: orange;
			font-size: 30px;
		}
			p{
			
			font-size: 130%;
		}
		
 a{
 	font-size: 20px;
 	text-decoration: none;

 }
.login-form{
	padding: 1px;
}
.heading{
    display: none;
   }

select{
	height: 34px;
	width: 90%;
	border-radius: 7px;
	border: none;
}

	</style>

</head>
<?php include_once('adminnav.php'); ?>
<body>
	
	<div class="body">
   <center>

   <div class="container">
   	<form class="login-form" method="post" action="">
   		
   		<h1 >Add Products</h1>
   		
   		<p style="padding-right: 68%;">Category</p>
   		
   		
   			
   			<?php
   			$connect = new PDO('mysql:host=localhost;dbname=kk', 'root', '');
   			$query1 = "SELECT * FROM category ORDER BY ctname ASC";
           $statement = $connect->prepare($query1);
           $statement->execute();
           $result = $statement->fetchAll();
   			   $query="select* from category";
   			   $query_run=mysqli_query($cann,$query) ;
   			   if (mysqli_num_rows($query_run)>0) {
   			   ?>
   			   <select id="ctid" name="ctid" class="form-control" required>
                                <option id="font" active>Category</option>
                                <?php
                                foreach($result as $row)
                                    {
                                        echo '<option id="font" value="'.$row["ctid"].'">'.$row["ctname"].'</option>';
                                    }
                                    ?> 
                </select> 

            <?php
   			      			   }
   			 ?>
   			
   			
   		  
   	<p style="padding-right: 60%;">Product Name</p>
   		<input type="text" name="pname"   required >
   		<p style="padding-right: 80%;">MRP</p>
   		<input type="text" name="MRP"   required >
   		<p style="padding-right: 80%;">Price</p>
   		<input type="text" name="pprice"   required >
   		<p style="padding-right: 68%;">description</p>
   	  <input type="text" name="pdescrip"    required >
   		<br><br>
   		<p style="padding-right: 60%;">Product photo</p>
   		<input type="file" name="ppics"   required ><br><br>
   		<button class="sign" type="submit" value="submit" name="add">ADD</button><br>
   	</form>
   	
   	</div>
   </div>
   </div>
</center>

</body>
<?php include_once('footer/footer.php'); ?>
</html>
<?php
     
    
     
    
     
     
  
       if (isset($_POST['add'])) {
       $ctid = $_POST['ctid'];
        $ctname = $_POST['ctname']; 
     $pname = $_POST['pname'];
     $MRP = $_POST['MRP'];
     $pprice = $_POST['pprice'];
     $pdescrip = $_POST['pdescrip'];
     $ppics = $_POST['ppics'];
    
    
    //echo($ctname.$ctid.$pname.$MRP.$pprice.$pdescrip.$ppics);

   
   
   $sql =" INSERT INTO product( `ctid`,`pname`,`pprice`,`pdescrip`,`ppics`,`MRP`) VALUES ('".$ctid."','".$pname."','".$pprice."','".$pdescrip."','".$ppics."','".$MRP."')";

    
  
      $result = mysqli_query($cann, $sql);
     if($result){
      ?>
      <script type="text/javascript">
       alert("Product is added");
         window.location="viewpro.php";
        
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

?>