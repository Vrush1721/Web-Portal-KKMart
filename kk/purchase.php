<?php
  session_start();
  include_once('dbconn.php'); 

  if ($_SERVER['REQUEST_METHOD']=="POST")
   {

  	if (isset($_POST["purchase"])) 
  	{
         $status = "Delivered"; 
  		$query1="INSERT INTO `orders`(`funame`, `email`, `mobno`, `address`, `city`, `state`, `zip`, `paymod`,`ptotal`,`status`) VALUES ('$_POST[funame]','$_POST[email]','$_POST[mobno]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[zip]','$_POST[paymod]','$_POST[ptotal]','pending')";
        if (mysqli_query($cann,$query1)) {
            // code...
                 $orderid=mysqli_insert_id($cann);
                 foreach($_SESSION["shopping_cart"] as $keys => $values){
                         $sql_cart="SELECT * FROM `product` WHERE pid=$keys";
                         $result_cart=mysqli_query($cann,$sql_cart);
                         $row_cart=mysqli_fetch_array($result_cart);
                         $query2= "INSERT INTO `user_order`(`orderid`,`productname`, `Price`, `Quantity`) VALUES ('$orderid','$values[item_pname]','$values[item_pprice]','$values[item_quantity]')";
                          if (mysqli_query($cann,$query2)) {

                            echo'<script type="text/javascript">
                              window.location = "dem.php";

                               </script>';


                          }

                 }
        
             

                 
        }
      

    else{
            echo'<script type="text/javascript">
           alert("Oops \n Order Unsucessfully ");
       </script>';
    }
  
}
}
?>