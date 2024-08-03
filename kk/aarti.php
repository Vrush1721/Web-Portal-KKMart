<?php 

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"kk");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 #foot{
    padding-top: 10%;
   }
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 50%;
  border: 2px solid black;
}

th, td {
  border: 2px solid orange;
  text-align: left;
  padding: 8px;
}
td{
  background-color: white;
  text-align: center;
}
th{
  text-align: center;
  background-image: linear-gradient(45deg, #ff4500, #ff4500);
}

</style>
</head>
<?php include_once('adminnav.php'); ?>
<body>
<center>
<h1>Order Details</h1>

<form>
<div style="overflow-x:auto;">
  <table>
  <tr>          
                <th >Item Name</th>
                        <th >Price</th>
                        <th >Quantity</th>
                        
                        <th >Total</th>
                        <th >Action</th>
            </tr>
  <?php

                    if (empty($_SESSION["shopping_cart"])) {
                        echo "<h2>Your Cart is Empty</h2>";
                    }
                    else
                        //$total = 0;
                    if(isset($_SESSION["shopping_cart"]))
                    {  

                       $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                          // $sr=$keys+1;
                           //$total=$total+$values['item_pprice'];
                    ?>
                    <tr>
                        <!--<td><?php echo "$sr"; ?></td>-->
                        <td><img src='<?php echo $values["item_ppics"]; ?>' width="50" height="40" /><?php echo $values["item_pname"]; ?></td>
                        <td>₹ <?php echo $values["item_pprice"]; ?> <input type="hidden" name="pprice" class="iprice" value="<?php $values['item_pprice']; ?>"></td>
                        <td><!--<input  class="cart_quantity_input" type="text" name="quantity" value="<?php echo $values["item_quantity"]; ?>"  size="2" readonly="">-->
                         <input type="number" class="iquantity" onchange="subTotal()" name="quantity" value="<?php echo $values['item_quantity']; ?>" class="form-control" ></td>
                        <!--<td><?php echo $values["item_quantity"]; ?></td>-->
                       
                        <td class="itotal">₹ <?php echo number_format($values["item_quantity"] * $values["item_pprice"], 2);?></td>
                        <!--<td class="itotal"></td>-->
                        <td><a href="cart.php?action=delete&pid=<?php echo $values['item_pid']; ?>" onclick="return confirm('Are you sure you want to Remove this item')"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
                            $total = $total + ($values["item_quantity"] * $values["item_pprice"]);
                        }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">₹ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <?php
                    }
                    ?>

  </table>
</div>
</form>
<br>
</center>
</body>
<?php include_once('footer.php'); ?>
</html>
