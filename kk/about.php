<?php 
include_once('dbconn.php'); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color:#dcdcdc;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head><?php include_once('navbar.php'); ?>
<body>

<div class="about-section">
  <img src="kklogo.jpg" style="border-radius:30px;"><br>
     <h1> KKMart In Shetphalgadhe</h1>
     <div class="about" style="font-size:20px;">
                                <p>KKmart in shetphagadhe is one of the leading businesses in the grocery store. Also known for gricery store, grocery store  For all category products like Houshold,Species & Masalas etc.</p>
                                <p> KKmart etablished in the year 2021,It's a first biggest grocery store in shetphagadhe.
                                This Shop in Shetphalgadhe villege has a wide range of products and services to cater to the various requirements of their customers. The shop owner are polite and prompt at providing any assistance. Pay for the product or service by using any of the available modes of payment, such as Cash, Master Card, G Pay, Amazon Pay, PhonePe. This shop is open from 08:30 am - 8:30 pm</p><br><br>

              <p style="color:black; font-size: 22px;">
            
             Address:<br>
            AP.Shetphalgadhe ,Tal-Indapur, Dist-Pune<br>
            Email: kkmart@gmail.com<br>
            mobile:9172802400<br>
          </p>
  </div> 
</div>


<?php include_once('contact.php'); ?><br>
</body>
<?php include_once('./footer/footer.php'); ?>
</html>

