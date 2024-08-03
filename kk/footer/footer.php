<?php 

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"kk");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Footer</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style type="text/css">
 
 *{
    font-family: serif;
 }


 	.footer{ 
        position: absolute;
     
 		height: 370px;
 		width: 100%;
        padding: 3%;
 		display: flex;
        background-image: linear-gradient(45deg, #ea3c53, #ff4500);
 		
 		
 	}
 	.footerb{
 		height: 180px;
 		padding:3.5%;
 	    font-size: 20px;
 		color: Black;
 		text-align: center;


       
 	}

    .footerb a{
        text-decoration: none;
        color: black;
         cursor: pointer;

    }
    .footerb i{
        background-color:#33383b;
         color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;"
    }
    .footerb i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}
    .footerb p{
        font-size: 30px;
    }
    .footerb a:hover{
        color:white;
    }
    .footerb #addr:hover{
    color: white;
 
}

@media only screen and (max-width: 775px) {
    
    .footerb{
        width: 100%;
        padding: 1px;

}
.footer{
    display: table-row;
    padding: 13px;
    float: right;
    height: 165vh;

    
}
.footerb #addr:hover{
    color: white;
 
}
.hr{
    width: 120px;
    }}
</style>
</head>
<body >
 <footer>
    <div id="foot" class="foot">
    <div class="footer">
        <div class="footerb" >
            <img src="kklogo.jpg" style="border-radius:20px; ">
            <h3 style="font: normal 30px 'Brush Script Std', cursive;">About<span><a href="kklogin.php" style="text-decoration:none; font: normal 36px 'Brush Script Std', cursive; color:#fdff00;" >KKMart</a></span></h3>
        </div>
        <br><br><br><br><br>

        <div class="footerb">
            
            <b><p style="color:;" >Quick Links</p></b>
            <hr class="hr" style="border:2px solid black;border-bottom: white;">
            <a href="Homepage.php">Home</a><br>
            <a href="about.php">About</a><br>
            
            

        </div>
        <br>
        <!--<div class="footerb">
            
            <b><p >Categories</p></b>
            <hr class="hr" style="border:2px solid black;border-bottom: white;"><br>
             <?php
               $query="select* from category";
               $query_run=mysqli_query($link,$query) ;
               if (mysqli_num_rows($query_run)>0) {
               ?>
                <ul  >
                    <?php 
                     foreach ($query_run as $item) {
                         $x=$item['ctid'];
                        ?>
                       
                       <li > <a href="household.php?cid='<?php echo"$x"; ?>'"><?php echo $item['ctname']; ?></a></li>
                       <?php      
                     }
                 ?>
              
            </ul>
            <?php
                               }
             ?>
    </div>-->
   
    <div class="footerb">
         <b><p >Address</p></b>
            <hr class="hr" style="border:2px solid black; border-bottom: white;">
        
            <i class="fas fa-map-marker-alt"></i>AP.Shetphalgadhe Bus-stop,<br><b>&nbsp&nbsp&nbsp&nbspTal-Indapur, Dist-Pune</b><br>
            <i class="fas fa-phone-alt"></i>mobile:9172802400<br>
            <i class="fa fa-envelope"></i><a href="mailto:kkmart2400@gmail.com" style="text-decoration:none; color:#fdff00;">kkmart2400@gmail.com</a><br>
             </h3>
            
            

    </div><br><br><br><br> <br> <br><br>
    <div class="footerb">
       
        <b><p >Direction</p></b>
        <hr class="hr" style="border:2px solid black;border-bottom: white;"> <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.163836527765!2d74.68428444998246!3d18.24830948214684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3754f998659c5%3A0x99e508af2dee227!2sKK%20MART!5e0!3m2!1sen!2sin!4v1628446691545!5m2!1sen!2sin" width="250" height="120" style="border:0;" allowfullscreen="" loading="lazy">

    </div>
    </div>
    
  </div>
  
  </footer>
</body>
</html>
