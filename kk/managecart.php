<?php
   session_start();
   //session_destroy();
   if ($_SERVER["REQUEST_METHOD"]=="POST") 
   {
    	if(isset($_POST["add_to_cart"]))
    	{
    		if(isset($_SESSION["shopping_cart"]))
    		{
    			$myitem=array_column($_SESSION["shopping_cart"],'pname');
    			if (in_array($_POST['pname'],$myitem)) 
    			{
    				echo"<script>
    				         alert('item Alreddy Added');
    				         window.location.href='viewproduct.php';
    				     </script>";
    			}
    			else
    			{
    				$count=count($_SESSION['shopping_cart']);
                $_SESSION['shopping_cart'][$count]=array('pname'=>$_POST['pname'],'pprice'=>$_POST['pprice'],'quantity'=>1);
                print_r($_SESSION["shopping_cart"]);
                echo"<script>
    				         alert('item Added');
    				         window.location.href='viewproduct.php';
    				     </script>";
    			}
               
    		}
    		else
    		{
                 $_SESSION['shopping_cart'][0]=array('pname'=>$_POST['pname'],'pprice'=>$_POST['pprice'],'quantity'=>1);
                 //print_r($_SESSION["shopping_cart"]);
                 echo"<script>
    				         alert('item Added');
    				         window.location.href='viewproduct.php';
    				     </script>";
    		}
    	}
      if (isset($_POST['remove'])) 
      {
      	foreach($_SESSION["shopping_cart"] as $keys => $values)
      	{
      		//print_r($keys);
      		if ($values['pname']==$_POST['pname'])
      		 {
      			unset($_SESSION["shopping_cart"][$keys]);
      			$_SESSION['shopping_cart']=array_values($_SESSION['shopping_cart']);
      			echo"<script>
    				         alert('Item Remove');
    				         window.location.href='mycart.php';
    				     </script>";
      		}
      	}
      }
      
    } 
 ?>