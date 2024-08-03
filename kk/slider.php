<!DOCTYPE html>
<html>
<head>
	<title>slider</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style type="text/css">
 	.slider{
    
    
    width: 92.5%;

    margin: 0;   
  
  }
  .slider img{
  	border-radius: 20px;

  }
  #simg{
    width: 107.9%;
    height: 400px;
    box-sizing: border-box;
   

  }

 </style>
</head>
<body>
	<script type="text/javascript">
		var images=["kk1.jpg",
		            "kk2.jpg",
		            "kk3.jpg",
		            "kk4.jpg",
		            "kk5.jpg",
		            "kk6.jpg"];
		   var i=0;
		   function slides() {

		    document.getElementById('simg').src=images[i];
		    if (i<(images.length-1)) 
		    	i++;
		    	else
		    		i=0;

		    

		   }
		   setInterval(slides,2000)

	</script>
   <div class="slider" >
    <img src="kk1.jpg" alt="kka.jpg" id="simg" >
  	
  </div>
</body>
</html>