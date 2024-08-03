<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title>Payment Option</title>
<style type="text/css">
	body{
		margin: 0;
		

	}
	form{
		border: 3px solid whitesmoke;
		text-align: center;
		box-sizing: border-box;
		width: 290px;
		height: 300px;
		padding: 20px;
		box-shadow: 0 15px 30px ;
     
			}
	form .pc,.la{
		 font-size: 20px;
       
	}

	#PB{
		background-color: red;
	}
	
</style>
</head>
<body>
    <div class="Payment">
    	<center>
    	<form>
    		<h1 style="text-align:center"><b>Payment Using</b></h1>
    		<input class="pc" type="radio" name="cash">&nbsp<label class="la">Pay on Cash</label><br><br>
    		<input class="pc" type="radio" name="cd">&nbsp<label class="la">Credit/Debit</label><br><br>
    		<center> <button class="pb" type="submit" id="PB" name="pay" style="height:30px;width:160px; color: white;">Continue</button><br></center>
    	</form>
    	</center>
    </div>
</body>
</html>