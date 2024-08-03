<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">
	<title>
		cart
	</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text center border rounded bg-light">
				<h1>My Cart</h1>
			</div>
			<div class="col-lg-8">
				<table class="table">
  	<thead>
  		<tr>
  			<th>serial No</th>
  			<th>item name</th>
  			<th>item price</th>
  			<th>Quantiry</th>
  			<th>Total</th>
  			<th>Action</th>
  		</tr>
  	</thead>
  	<tbody>
  		<?php 
  		$total=0;
  		if (isset($_SESSION['shopping_cart'])) 
  		{
  		foreach($_SESSION['shopping_cart'] as $keys => $values){
  			//print_r($values);
  			$sr=$keys+1;
  			$total=$total+$values['pprice'];
  		echo"	
  		<tr>
  			<td>$sr</td>
  			<td>$values[pname]</td>
  			<td>$values[pprice] <input type='hidden' name='pprice' class='price' value='$values[pprice]'></td>
  			<td><input class='quantity' onchange='subTotal()' type='number' name='quantity' value='$values[quantity]' min='1' max='10'/></td>
        <td class='itotal'></td>
  			<td>
  			<form action='managecart.php' method='post'>
  			<button name='remove'>Remove</button>
  			<input type='hidden' name='pname' value='$values[pname]'>
  			</form></td>
  		</tr>";
  		}
  	}
  		?>
  		
  	</tbody>
  </table>
			</div>
			<div class="col-lg-4">
				<h1>Total</h1>
				<?php echo $total; ?>
				<form >
					<h4><input type="radio" name="cod" value="cod">Cash On Delivary</h4>
					<button>Continue</button>
				</form>
			</div>
		</div>
		
	</div>
  <script type="text/javascript">
  	    var price=document.getElementsByClassName['price'];
        var quantity=document.getElementsByClassName['quantity'];
        var itotal=document.getElementsByClassName['itotal'];
        function subTotal()
        {
        	for(i=0;i<price.length;i++)
            {
               itotal[i].innerText=(price[i].values)*(quantity[i].values);
            }
        }
        subTotal();
  </script>
</body>
</html>