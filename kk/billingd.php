<?php
session_start();
$em=$_SESSION['email'];
      if($em == true){
            //header("location:adminnav.php");
      }
      else
      {
        header("location:custlog.php");
      
      }?>
<!DOCTYPE html>
<html>
<head>
  <title>Billing address</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  box-sizing: border-box;
    box-shadow: 0 15px 30px ;
  margin-top: 4%;
  width: 80%;
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  .container{
    width: 100%;
  }
}
</style>
</head>
<?php include_once('navbar.php'); ?>
<body>


<div class="row">
  <div class="col-75">
    <div class="container"><br>
      <a href="cart.php" class="btn">Back</a>
      <form action="purchase.php" method="post">
      <br>
        <div class="row">
          <div class="col-50">
            <br>
            <h3>Billing Address</h3>
            
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="funame" pattern="[a-zA-Z'-'\s]*" title="Name must type in a-zA-Z'-format" placeholder="Rajpure Vrushali" required>
            <!--<label for="email"><i class="fa fa-envelope"></i> Email</label>-->
            <input type="hidden" id="email" name="email" value="<?php  echo $_SESSION['email']; ?>" placeholder="vrush@example.com" required>
            <label for="mob"><i class="fa fa-address-card-o"></i> Mobile No</label>
            <input type="text" id="mob" name="mobno" pattern="^\d{10}$" title="Mobile number must contain 10 number" placeholder="9999999999" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York"required>


            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" pattern="[a-zA-Z'-'\s]*" title="State must type in a-zA-Z'-format" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" pattern="^\d{06}$" title="Zip  must contain 6 number" name="zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3><br>
            <label style="font-size:25px;"><input type="radio" name="paymod" value="COD">&nbsp cash on delivary</label>
            <img src="cod.jpg" style="height:300px;width: 80%;">
            <!--<label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>-->
             <div>
          <?php

                    
                        //$total = 0;
                    if(isset($_SESSION["shopping_cart"]))
                    {  
                    
                       $total = 0;
                       
                       ?>
                        
                      
                       <?php       
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                           $rs=array($values["item_pname"]."₹".$values["item_pprice"].",Qty:".$values["item_quantity"]);
                          //$arr=implode(",",$rs);
                          

                    ?>
                   
                                                   
                      
                        
                    <?php
                            $total = $total + ($values["item_quantity"] * $values["item_pprice"]);
                        }
                    ?>
                   
                        <td colspan="3" align="right">Total:</td>
                        <td align="right"><input type="text" name="ptotal" value="<?php  echo  number_format($total, 2); ?>"> </td>
                        <td></td>
                    </tr>
                    <?php
                    }
                   
                   
                    ?>
                        
                </table><br>
                
            </div>

          </div>
                 </div>
       
        <input type="submit" value="Place Order" name="purchase" onclick="myfunction()" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
<?php include('./footer/footer.php');?>
</html>
