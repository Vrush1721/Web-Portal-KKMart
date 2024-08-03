<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>HOMEPAGE</title>
  <style type="text/css">
    * {
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-size: 80.5%;
    font-family: 'Roboto', sans-serif;
}
.navbar{
    background-color: orange;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}
.header{
    border-bottom: 1px solid orange;
    position: sticky ;
    top: 0;

}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 12px;
}
.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 23px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}
.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 5rem;
}

.nav-link{
    font-size: 1.6rem;
    font-weight: 400;
    color: #475569;
}

.nav-link:hover{
    color: #482ff7;
}

.logo {
    font-size: 2.1rem;
    font-weight: 500;
    color: #482ff7;
}
@media only screen and (max-width: 768px) {
    .nav-menu {
        position: fixed;
        left: 100%;
        top: 14rem;
        flex-direction: column;
        background-color:orange;
        width: 50%;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:0 10px 27px rgba(0, 0, 0, 0.05);
    }
   
    .sign{
        display: none;
    }
    .cart{
        display: none;
    }
    .nav-menu.active {
        left: 0;
        background-color: orange;

    }

    .nav-item {
        margin: 2.5rem 0;

    }

    .hamburger {
        display: block;
        cursor: pointer;
    }
   h3{
    display: none;
   }
   
}

nav ul ul{
            position: absolute;
            display: none;
            background: #ff7200;
            padding-top:10px ;


        }
        nav ul li:hover>ul{
          display: block;
          

        }
        nav ul ul li{
            width: 139px;
            float: none;
            display: list-item;
            position: relative;
            text-align: center;
            background-color: orange;

        }
        nav ul ul li a:hover{
            color: white;
        }
        nav ul :hover{
            color: white;
        }
    
  </style>
</head>
<body>
   
<div class="header">
    <div id="mid">
    <img src="kkbord.jpg" alt="" class="logo" style="width:100%;height:130px; padding: 1px; position:sticky; top:1px;">
       
  </div>
        <nav class="navbar">
            <img src="kklogo.jpg" style="height: 70px; border-radius: 20px; width: 10%;">
            <form>

                <input type="search" name="search" placeholder="Search" style="width: 260px;border-radius: 10px; height: 30px;"> 
         <button type="submit" style="width: 30px; height: 29px;border-radius: 12px;"> <i class="fa fa-search"></i>
         </button>  
            </form>
         
         
           
            

           
            <ul class="nav-menu">
              <li class="nav-item" style="font-size:20px"><a href="" class="categories"><b>All Categories</b> <i class='fas fa-angle-down' ></i></a>
                <ul  >
                       
                       <li><a href="">Drinks</a></li>
                       <li><a href="">Household cleaners</a></li>
                       <li><a href="">DiaryProducts</a></li>
                        <li><a href="">Hair care & styling</a></li>
                            <li><a href="">Cleaning Supplies</a></li>
                    </ul>

           </li>
          <li  class="nav-item" style="font-size:19px"><a href=""><i class='fas fa-home' style="font-size:24px"></i><b>Home</b></a></li>
          <li  class="nav-item" style="font-size:19px"> <a href=""><b>About</b></a></li>
          
        </ul>
        <a href="custlog.php"><i  class="fa fa-user-alt" style="font-size:20px;"></i><h3><b>SignIn</b></h3></a>
            
            <a href="cart.php"><i class='fas fa-shopping-cart' style='font-size:20px ; '></i><h3><b>Cart</b></h3></a>
            <a href="index.php"><i class="fa fa-power-off" style='font-size:20px ; '></i><h3><b>LogOut</b></h3></a>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

</div>

  
<script type="text/javascript">
    const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}



</script>
<br>
<?php include_once('slider.php'); ?><br>
<?php include_once('offers.php'); ?><br>
<?php include_once('products.php'); ?><br>
<?php include('./footer/footer.php');?>
</body>
</html>