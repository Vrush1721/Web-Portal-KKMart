<?php 


include('dbconn.php');
  

if(isset($_POST["add_to_cart"]))
{
$shopping_cart =  $_SESSION['shopping_cart'];

}
//  print_r($cart);

?>
 
 
<div class="container">
    <h2 class='text-center text-white'>Cart</h2>

   <table class="table table-bordered bg-white">
       <tr>
           <th>Image</th>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Total</th>
           <th>Action</th>
       </tr>

       <?php
       $total = 0;
       foreach($shopping_cart as $key => $value){
        // echo $key ." : ". $value['quantity'] . "<br>";
        
        $sql = "SELECT * FROM product where pid = $key";
$result = mysqli_query($cann, $sql);

$row = mysqli_fetch_assoc($result)
        ?>


            <tr>
           <td><img src="admin/<?php echo $row['thumb']?> " alt=""></td>
           <td><a href="single.php?id=<?php echo $row['pid']?>"><?php echo $row['pname']?></a></td>
           <td><?php echo $row['pprice']?> </td>
           <td><?php echo $value['quantity']?></td>
           <td><?php echo $row['pprice'] * $value['quantity'] ?> </td>
            <td><a href='deleteCart.php?id=<?php echo $key; ?>'>Remove</a></td>
            </tr>

        <?php

$total = $total +  ($row['pprice'] * $value['quantity']);
    }
    
    ?>
      
   </table>

   <div class="text-right">
    <!-- <button class="btn mr-3">Update Cart</button> -->

    <a class="btn" href='checkout.php'>Checkout</a>
</div>
<div class="card">
<div class="card-header">Total</div>
<div class="card-body">
Total Amount: INR <?php echo $total; ?>.00/-
</div>
</div>

</div>








<?php include('inc/footer.php');  ?>


