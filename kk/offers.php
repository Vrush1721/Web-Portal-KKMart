<?php
   include_once('dbconn.php'); 

    $msg='';
   if (isset($_POST['upload'])) {
    $pimg=$_FILES['pimg']['name'];
    $path=$pimg;
    $sql=$cann->query("INSERT INTO slides(pimg) VALUES ('$path')");
    if ($sql) {
      
      move_uploaded_file($_FILES['pimg']['name'],$path);
      $msg="image uploaded";
    }
    else{
      $msg="img not uploaded";
    }
   }

   $result=$cann->query("select pimg from slides");

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Offers</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
  *{
    color: black;
  }
  .container-fluid{
    padding-top: 20px;
  }
  .carousel-inner{
    z-index: -1;
  }
</style>
</head>
<body>
  
   <div class="container-fluid">
    <div class="row">
      <div class=" col-lg-10" >
        <div id="demo" class="carousel slide" data-ride="carousel" >

  <!-- Indicators -->
  <ul class="carousel-indicators" >
    <?php 
           $i=0;
           foreach ($result as $row) {
             $actives='';
             if ($i==0) {
              $actives='active';
             }
          

     ?>
    <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
    <?php 
           $i++;
       }

    ?>
    
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" >
    <?php 
           $i=0;
           foreach ($result as $row) {
             $actives='';
             if ($i==0) {
              $actives='active';
             }
          

     ?>
    <div class="carousel-item <?= $actives; ?> " >
      <img src="<?= $row['pimg'] ?>" width="100%" height="500" style=" border-radius: 90px;" >
    </div>
   <?php 
           $i++;
       }

    ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" >
    <span class="carousel-control-next-icon" ></span>
  </a>

</div>
      </div>
    </div>
    
   </div>
</body>
</html>