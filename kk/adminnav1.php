
<?php 
include('adminnav.php');
include('dbconn.php');?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <title>Dashboard</title>
        <style type="text/css">
       
        .db{
            display: flex;
            padding-left: 20px;


        }
        body {
  background-image: url("adminpa.jpg");
  background-size: cover;
     height: 140vh;
     background-position: center;
     background-repeat: no-repeat;
  margin: 0;

  font-family: Arial, Helvetica, sans-serif;
}
        .dboard,.dboard1,.dboard2,.dboard3,.dboard4{
              
               
               border-radius: 10px;
               width: 270px;
               border-radius: 30px;
        }

            .dboard{
            background-color: #00bfff;
             box-shadow: 5px 5px #999,8px 8px #00bfff;
         margin-left: 30px;
            text-align: center;
            }
            .dboard:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
            .dboard1{
                margin-left: 30px;
                box-shadow: 5px 5px #999,8px 8px #ff69b4;
                background-color: #ff69b4;
                text-align: center;
            }
            .dboard1:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
            .dboard3{
                
             box-shadow: 5px 5px #999,8px 8px #00ff7f;
                background-color: #00ff7f;
                text-align: center;
            }
            .dboard3:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
            .dboard2{
                margin-left: 30px;
              box-shadow: 5px 5px #999,8px 8px yellow;
                background-color:yellow;
                text-align: center;
            }
            .dboard2:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
            .dboard4{
                margin-left: 30px;
              box-shadow: 5px 5px #999,8px 8px #ba55d3;
                background-color:#ba55d3;
                text-align: center;
            }
            .dboard4:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
            @media only screen and (max-width: 768px) {
                .db{
            display: table-row;

               }
               .dboard,.dboard1,.dboard2,.dboard3,.dboard4{
   
               margin-left: 45%;
        }
               .dboard3{
           
             
            text-align: center;
            }
             body {
  background-image: url("adminpa.jpg");
  background-size: cover;
     height: 250vh;
     background-position: center;
     background-repeat: no-repeat;
  margin: 0;

  font-family: Arial, Helvetica, sans-serif;
}
            }

        </style>
    </head>
    <body>
        <h1 style="color: white; text-align:center; font-size:40px;">Dashboard</h1>
         <!-- Main content Section Starts -->
    <div class="main-content">
     <div class="wrapper">
      
          <br><br>
        <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
          ?>
          <br><br>
<div class="db">

               <div class="dboard3">
          <?php 
            //sql query
             $sql = "SELECT * FROM customer";
             //execute the query
             $res1 = mysqli_query($cann,$sql);
             //count rows
             $count1 = mysqli_num_rows($res1);
          ?><br>
            <img src="crowd.png" style="width: 40px; height: 70px;">
            <h1><?php echo $count1; ?></h1>
            <br>
            <h2>Customers</h2>
             <br>
        </div>
        <br>
        <div class="dboard">
          <?php 
            //sql query
             $sql = "SELECT * FROM category";
             //execute the query
             $res = mysqli_query($cann,$sql);
             //count rows
             $count = mysqli_num_rows($res);
          ?><br>
          <img src="cp.png" style="width: 40px; height: 70px;">
            <h1><?php echo $count; ?></h1>
            <br>
            <h2>Categories</h2>
             <br>
        </div>
         <br>
        <div class="dboard2">
          <?php 
            //sql query
             $sql = "SELECT * FROM product";
             //execute the query
             $res1 = mysqli_query($cann,$sql);
             //count rows
             $count2 = mysqli_num_rows($res1);
          ?><br>
          <img src="product-management.png" style="width: 40px; height: 70px;">
            <h1><?php echo $count2; ?></h1>
            <br>
            <h2>Products</h2>
             <br>
        </div>
 <br>
       

        <div class="dboard1">
        <?php 
            //sql query
             $sql3 = "SELECT * FROM orders";
             //execute the query
             $res3 = mysqli_query($cann,$sql3);
             //count rows
             $count3 = mysqli_num_rows($res3);
          ?><br>
          <img src="shopping-cart.png" style="width: 40px; height: 70px;">
            <h1><?php echo $count3;?></h1>
           <br>
            <h2>Total Orders</h2>
            <br>
        </div>

        <br>
         <div class="dboard4">

        <?php 
           //create sql query to get total revenue generated
           //aggregate function in sql

           $sql4 = "SELECT SUM(ptotal) AS Total FROM orders WHERE status='Delivered'";

           //execute the query
           $res4 = mysqli_query($cann,$sql4);

           //get the values
           $row= mysqli_fetch_assoc($res4);

           //get the total revenue
           $total_revenue = $row['Total'];
        ?><br>

             <img src="salary.png" style="width: 40px; height: 70px;">
            <h1>₹ <?php echo $total_revenue;?></h1>
            <br>
            <h2>Revenue Generated</h2>
             <br>
        </div>

     
    </div>
    <!-- Main content Section Ends -->
    <br><br><br><br>
    </body>
    <?php include('./footer/footer.php');?>
    </html>
    