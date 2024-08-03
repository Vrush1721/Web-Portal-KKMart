<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <title>Responsive Footer</title>

  <link rel="stylesheet" href="style.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  <style type="text/css">
    *{
  padding:0;
  margin:0;
}

html{
  background-color: #eaf0f2;
}

body{
  font:16px/1.6 Arial,  sans-serif;
}

header{
  text-align: center;
  padding-top: 100px;
  margin-bottom:190px;
}

header h1{
  font: normal 32px/1.5 'Open Sans', sans-serif;
  color: #3F71AE;
  padding-bottom: 16px;
}

header h2{
  color: #F05283;
}

header span{
  color: #3F71EA;
}


/* The footer is fixed to the bottom of the page */

footer{
  position: fixed;
  bottom: 0;
}

@media (max-height:800px){
  footer { position: static; }
  header { padding-top:40px; }
}


.footer-distributed{
  background-image: linear-gradient(45deg, #ea3c53, #ff4500);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px 50px 60px 50px;
  margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 30%;
}

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Cookie', cursive;
  margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
  width: 30%;
}

.footer-distributed h3 span{
  color:  #fdff00;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}


.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  #fdff00;
  text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
  width: 30%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}
  </style>

</head>
  <body>
    

    <!-- The content of your page would go here. -->

    <footer class="footer-distributed">

      <div class="footer-left">
          <img src="kklogo.jpg" style="border-radius:20px; ">
        <h3>About<span><a href="kklogin.php" style="text-decoration:none; color:#fdff00;" >KKMart</a></span></h3>

        <p class="footer-links">
          <a href="Homepage.php">Home</a>
          
          |
          <a href="about.php">About</a>
          |
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">© 2022 KKmart Online shopping Pvt. Ltd.</p>
      </div>
      

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
            <p><span style="color:white;">AP.Shetphalgadhe Bus Stop,</span>
            Indapur, Pune - 413130</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 9172802400</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:kkmart2400@gmail.com">kkmart2400@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span> <i class="fa fa-map-marker" style="background-color:#33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;"></i>&nbsp Directon</span>
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.163836527765!2d74.68428444998246!3d18.24830948214684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3754f998659c5%3A0x99e508af2dee227!2sKK%20MART!5e0!3m2!1sen!2sin!4v1628446691545!5m2!1sen!2sin" width="250" height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </footer>
  </body>
</html>