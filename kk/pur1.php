<?php 
  session_start();
include_once('dbconn.php'); 
  if($_SERVER['REQUEST_METHOD']=="POST"){
  	if(isset($_POST['purchase']))
  	{
  		$query1="INSERT INTO `orders`( `funame`, `email`, `mobno`, `address`, `city`, `state`, `zip`, `paymod`,`opro`,`ptotal`,`status`) VALUES ('$_POST[funame]','$_POST[email]','$_POST[mobno]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[zip]','$_POST[paymod]','$_POST[opro]','$_POST[ptotal]','ordered')";
  	
   if(mysqli_query($cann,$query1))
   {
   	   $orid=mysqli_insert_id($cann);
         $query2="INSERT INTO `user_order`(`orid`, `item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
      
        $stmt=mysqli_prepare($cann,$query2);
        if($stmt)
        {
           mysqli_stmt_bind_param($stmt,"isii",$orid,$item_name,$Price,$Qantity);
           foreach ($_SESSION['shopping_cart'] as $key => $value) {
           	$item_name=$value["pname"];
           	$Price=$value["pprice"];
           	$Quantity=$value["quantity"];
           	mysqli_stmt_execute($stmt);
           	// code...
           }
           unset($_SESSION['shopping_cart']);
           echo"order place";
        }
       else{
       	echo "prepared error";
       }
   }
   else
   {
   	echo "sql error";
   }
}
  }
 ?>