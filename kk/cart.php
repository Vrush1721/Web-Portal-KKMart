<?php 
/* code by webdevtrick ( https://webdevtrick.com ) */
include_once('dbconn.php'); 
session_start();

    //session_destroy(); 
      error_reporting();
      $em=$_SESSION['email'];
      if($em == true){
        
            //header("location:adminnav.php");
      }
      else
      {
        header("location:custlog.php");
      
      }

 

if(isset($_POST["add_to_cart"]))
{

               

            
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_pid");
        if(!in_array($_GET["pid"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_pid'           =>  $_GET["pid"],
                 'item_ppics'           =>  $_POST["ppics"],
                'item_pname'         =>  $_POST["pname"],
                'item_pprice'        =>  $_POST["pprice"],
                'item_quantity'     =>  $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            
        }
        else
        {

            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_pid'           =>  $_GET["pid"],
            'item_ppics'           =>  $_POST["ppics"],
            'item_pname'         =>  $_POST["pname"],
            'item_pprice'        =>  $_POST["pprice"],
            'item_quantity'     =>  $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{  //remove items
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_pid"] == $_GET["pid"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                //echo '<script>alert("Item Removed")</script>';
                //echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <style type="text/css">
            table, tr,td,th{
                font-size: 20px;
                border:3px solid #ff4500 ;
                border-radius: 3px;
             
            }

            th{
                background-color:  #ff4500;
            }
            .bs{
  font-size: 23px;
  height: 45px;
   width: 180px;
   border: 3px solid  #ff4500;
   box-shadow: 0 9px #999;
   border-radius: 10px;
 

}
.bs:hover{
  background-color: #ff4500;
  transform: translate(3px);
}
.bs a{
  text-decoration: none;
  color: black;
}
        </style>
    </head>
    <?php include_once("navbar.php"); ?>
    <body>
        <br />
        <div class="container">
            <br />
        
            <h3 align="center"><b style="font-size:50px;">Shoping Cart</b> </h3><br />
          
            <?php
                $query = "SELECT * FROM product ORDER BY pid ASC";
                $result = mysqli_query($cann, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            
            <?php
                    }
                }
            ?>
            <div style="clear:both"></div>
            <br />
           
            <div class="table-responsive">
                 <button class="bs" class="bs"><a href="viewproduct.php">Back to shopping</a></button>
               <br><br>
                <table class="table table-bordered">
                    <tr>
                        <!--<th>sr</th>-->
                        <th width="40%">Item Name</th>
                        <th width="20%">Price</th>
                        <th width="10%">Quantity</th>
                        
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
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
                        <td style="text-align:center;">
                        <!--<input type="number" class="iquantity" onchange="subTotal()" name="quantity" value="<?php echo $values["item_quantity"]; ?>" class="form-control" >-->
                             <?php echo $values["item_quantity"]; ?>
                         </td>
                       
                       
                        <td class="itotal">₹ <?php echo number_format($values["item_quantity"] * $values["item_pprice"], 2);?></td>
                        <!--<td class="itotal"></td>-->
                        <td><a href="cart.php?action=delete&pid=<?php echo $values["item_pid"]; ?>" onclick="return confirm('Are you sure you want to Remove this item')"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
                            $total = $total + ($values["item_quantity"] * $values["item_pprice"]);
                        }
                    ?>
                    <tr>
                        <td colspan="3" align="right"><b>Total</b></td>
                        <td align="right" >₹ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <?php

                    }
                //print_r($_SESSION['shopping_cart']);
                // print_r(implode(',', $_SESSION['shopping_cart']));             
                    
                    ?>
                        
                </table><br>
                
            </div>
            
            <button class="bs" name="conti" style="float: right;" ><a href="billingd.php">Continue &nbsp<i class="fas fa-arrow-right"></i></a></button>
        </div>
    </div>
    <br />
   
    </body>
     <?php include('./footer/footer.php');?>
</html>

