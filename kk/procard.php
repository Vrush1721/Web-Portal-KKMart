
<!DOCTYPE html>
<html>
<head>
	<title>Footer</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style type="text/css">
 *{
   font-family: sans-serif;
 }

 	.pp{
        height: 490px;
       
    }

   .product {
    background-color: white;
    width: 20%;
    height: 400px;
    margin: 15px;
    
    box-sizing: border-box;
    float: left;
    text-align: center;
   
    font-family: Nunito Sans;
   
    font-size: 18px;
   
    box-shadow: 0 15px 30px ;
    transition: .4s;
}
img{
    height: 170px;
}
@media only screen and (max-width: 768px) {
.product {
    width: 43%;
    height: 420px;

}
.pp .pp1{
   margin-left: 1%;
}
.product .buy-1{
   width: 150px;
}

body .ctitle h1{
   margin-top: 90%;
   margin-left: 60px;
   font-size: 30px;
   color: #ff4500;
}
body .ctitle1 h1{
    margin-left: 60px;
   font-size: 30px;
   color: #ff4500;
}

}
.pp1{
   margin-left: 10%;
}
.buy-1{
   background-color: orange;
   width: 200px;
   height: 30px;
   border-radius: 13px;
   font-size: 20px;
}


.price{
  
   font-size: 19px;
}

.mrp{
   font-size: 15px;
}
del{
   color: gray;
}
.ctitle{
   padding-top: 100px;

}
.ctitle  h1{
  margin-left: 43%;
   font-size: 40px;
   color: #ff4500;
}
.ctitle1  h1{
 margin-left: 38%;
   font-size: 40px;
   color: #ff4500;
}
body .ctitle,.ctitle1{
   padding-top: 100px;
}

.ctitle ,.ctitle1 h1 a{
   margin-right: 10%;
   padding-top: 20px;
}
.mainc{
   background-color:#e7feff;
   border-radius: 30px;
}
 </style>
</head>
<body >
   <div class="mainc">
   <div class="ctitle1">
    <h1 >Snacks & Branded food <a href="Snaks.php" style="float: right;font-size: 20px;" >Visit Here</a></h1>
    </div>

<div class="pp"> 
<div class="pp1" style="padding-top:40px;"> 
 <form method="post" action="cart.php?action=add&pid=<?php echo $row["pid"]; ?>"> 
     <div class="product" >
    
        <img src="gd.jpg">
        <h3>Good Day</h3><br>
        <p>BRITANNIA Good Day Cashew<br>
         Cookies(100g)</p><br>
        <h6 class="mrp">MRP : ₹25.00</h6><br>
        <h6 class="price">₹19.00 &nbsp&nbsp   <del>₹30</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
        
     
     </div>
     </form>
     <div class="product">

        <img src="pg.jpg">
        <h3>Parle-G</h3><br>
        <p>Parle-G Original Gluco Biscuits</p><br>
        <h6 class="mrp">MRP : ₹10.00</h6><br>
        <h6 class="price">₹9.00 &nbsp&nbsp   <del>₹12</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="marie-gold.png" style="width: 200px;">
        <h3>Marie Gold</h3><br>
        <p>BRITANNIA Marie Gold Biscuits</p><br>
        <h6 class="mrp">MRP : ₹10.00</h6><br>
        <h6 class="price">₹8.70 &nbsp&nbsp   <del>₹12</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="krackjack.jpeg" style="width: 200px;">
        <h3>Krack Jack </h3><br>
        <p>PARLE Krack Jack Sweet & Salty<br> (800 g, Pack of 16)</p><br>
        <h6 class="mrp">MRP : ₹10.00</h6><br>
        <h6 class="price">₹9.00 &nbsp&nbsp   <del>₹12</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
   </div>
     
</div>
<div class="ctitle">  <h1 >Household & cleaning <a href="houshold.php" style="float: right;font-size: 20px;">Visit Here</a></h1>
</div>
<div class="pp"> 
<div class="pp1" style="padding-top:40px;">     
     <div class="product">

        <img src="rin.jpg">
        <h3>RIN</h3><br>
        <p>Rin Rin detergent Bar </p><br>
        <h6 class="mrp">MRP : ₹10.00</h6><br>
        <h6 class="price">₹9.00 &nbsp&nbsp   <del>₹10</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="xpart.jpg">
        <h3>Xpert</h3><br>
        <p>Xpert hygienic Dishwash Bar+Scrub</p><br>
        <h6 class="mrp">MRP : ₹45.00</h6><br>
        <h6 class="price">₹42.00 &nbsp&nbsp   <del>₹50</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="harpic.jpg">
        <h3>Harpic</h3><br>
        <p>Harpic Powerplus Original, 750 ml </p><br>
        <h6 class="mrp">MRP : ₹230.00</h6><br>
        <h6 class="price">₹229.00 &nbsp&nbsp   <del>₹0</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">
      

        <img src="Lyzol-500ml.jpg" style="width: 200px;">
        <h3>Lyzol</h3><br>
        <p>Lyzol Disinfectant surface Cleaner floral 200ml</p><br>
        <h6 class="mrp">MRP : ₹30.00</h6><br>
        <h6 class="price">₹29.00 &nbsp&nbsp   <del>₹32</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
  </div>   
</div>
<div class="ctitle">
<h1 >Species & Masalas and Oil <a href="Snaks.php" style="float: right;font-size: 20px;">Visit Here</a></h1>
</div>
<div class="pp">
<div class="pp1" style="padding-top:40px;">      
     <div class="product">

        <img src="sunlite.jpg">
        <h3>Sunny Sunlite Oil</h3><br>
        <p>Sunny Sunlite Refined Sunflower<br> Oil Pouch   1L</p><br>
        <h6 class="mrp">MRP : ₹225.00</h6><br>
        <h6 class="price">₹165.00 &nbsp&nbsp   <del>₹230</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="suh-pb.png">
        <h3>PavBhaji Masala</h3><br>
        <p>Suhana Pavbhaji Masala 100g</p><br>
        <h6 class="mrp">MRP : ₹70.00</h6><br>
        <h6 class="price">₹59.00 &nbsp&nbsp   <del>₹70</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="mustard.jpg" style="width: 150px; height: 130px;">
        <h3>Mustard</h3><br>
        <p>Vedaka Mustard Seeds (Rai) Small <br> 200g</p><br>
        <h6 class="mrp">MRP : ₹50.00</h6><br>
        <h6 class="price">₹28.00 &nbsp&nbsp   <del>₹50</del> </h6><br>
        <button class="buy-1"name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="ambarigoda.jpg">
        <h3>Goda Masala</h3><br>
        <p>Ambari Goda Masala  (200 g)<br> buy at KKMart</p><br>
        <h6 class="mrp">MRP : ₹70.00</h6><br>
        <h6 class="price">₹66.00 &nbsp&nbsp   <del>₹72</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
  </div>   
</div>
<div class="ctitle">
<h1 >Cold Drinks <a href="Snaks.php" style="float: right;font-size: 20px;">Visit Here</a></h1>
</div>
<div class="pp">
<div class="pp1" style="padding-top:40px;">      
     <div class="product">

        <img src="slice.jpg">
        <h3>Slice</h3><br>
        <p>Rin Rin detergent Bar </p><br>
        <h6 class="mrp">MRP : ₹10.00</h6><br>
        <h6 class="price">₹9.00 &nbsp&nbsp   <del>₹10</del> </h6><br>
        <button class="buy-1" name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="pepsi1.png">
        <h3>Pepsi</h3><br>
        <p>Pepsi Soft Drink, 750 ml</p><br>
        <h6 class="mrp">MRP : ₹40.00</h6><br>
        <h6 class="price">₹35.00 &nbsp&nbsp   <del>₹45</del> </h6><br>
        <button class="buy-1"name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="7up.png" style="width: 200px;">
        <h3>7 Up</h3><br>
        <p>7 Up Soft Drink, 600 ml</p><br>
        <h6 class="mrp">MRP : ₹40.00</h6><br>
        <h6 class="price">35.00 &nbsp&nbsp   <del>₹42</del> </h6><br>
        <button class="buy-1"name="Add_to_cart">Add to Cart</button>
     </div>
     <div class="product">

        <img src="cococola.jpg" style="width: 200px;">
        <h3>Coco-Cola</h3><br>
        <p>Coca-Cola PET Bottle  (750 ml)</p><br>
        <h6 class="mrp">MRP : ₹40.00</h6><br>
        <h6 class="price">38.00 &nbsp&nbsp   <del>₹42</del> </h6><br>
        <button class="buy-1"name="Add_to_cart">Add to Cart</button>
     </div>
    </div> 
</div>




</div>
</body>
</html>