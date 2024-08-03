<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>demo</title>
    <style type="text/css">
        .tables {
            text-align: center;
            border: 2px solid black;
         
        }
       th,tr,td{
              
            align-items: center;
            padding: 10px;
        }
        .print button{
            width: 100px;
            height: 30px;
            font-size: 20px;
            background-color: deepskyblue;
        }

    </style>
</head>
<?php include_once('navbar.php'); ?>

<body>
    <br><br>
    <br><br>
<center>
    <h1>Thank You!</h1>
    <h2 style="color:green;">Your Order Placed Successfylly!</h2>
    <table class="tables table-bordered">
                    <tr>
                        <!--<th>sr</th>-->
                        <th >Item Name</th>
                        <th >Price</th>
                        <th >Quantity</th>
                        <th >Total</th>
                    
                    </tr>
  
   <?php

                    
                       
                    if(isset($_SESSION["shopping_cart"]))
                    {  

                       $total = 0;
                       $cart=$_SESSION['shopping_cart'];
                       $length=count($cart);
                       print_r("<h3>Total Products :".$length."</h3>");
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                          
                    ?>
                    <tr>
                        <td ><?php echo $values["item_pname"]; ?></td>
                         <td>₹<?php echo $values["item_pprice"]; ?></td>
                          <td><?php echo $values["item_quantity"]; ?></td>
                           <td>₹ <?php echo number_format($values["item_quantity"] * $values["item_pprice"], 2);?></td>
                       
                        
                    <?php
                            $total = $total + ($values["item_quantity"] * $values["item_pprice"]);
                        }
                       
                   ?>
                   <tr>
                        <td colspan="3" align="right"></td>
                        <td align="right" style="border:2px solid black;"><b>Total:</b> ₹ <?php echo number_format($total, 2); ?></td>
                        
                    </tr>
               </tr>
                   <?php
                    }
                    //unset($_SESSION["shopping_cart"]);
                    ?>
</table>
<br>
 
<div class="print">
    <!--<button onclick="window.print()" class="btn btn-primary"><i class=" fas fa-print" aria-hidden="true"></i></button>-->
    <button onclick="window.print()" class="btn btn-primary" style="height:40px;width: 160px; border-radius: 13px;"><i class="fa fa-download" aria-hidden="true">Download</i></button>
</div>

    </center>                
</body>
<br><br><br><br><br><br><br><br>
<?php include('./footer/footer.php');?>

</html>