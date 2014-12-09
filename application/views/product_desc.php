<html>
<head>
	<title>Product Description</title>	

<style type="text/css">
	
	body {
		width: 970px;
	}
	.header {
	 background-color: black;
	 height: 60px;
	 color: white;
	}

	#title, #shoppingCart{
	 display: inline-block;
	}

	#title{
	 margin-left: 10px;
	}
	#shoppingCart{
	 margin-left: 500px;
	}

.shoppingCartColor{
	color: white;
}
	.products div{
		margin: 10px;
		display: inline-block;
	}

	.images {
		width: 250px;
		height: 150px;
		margin: 10px;
	}
	
	.description {
		width: 500px;
		height: 350px;
		margin: 10px;
	}

	.images, .description {
		display: inline-block;
		vertical-align: top;
	}
</style>
</head>

<body>
   	<div class="header">
   		<h2 id="title">Dojo eCommerce</h2>
   		<h2 id="shoppingCart"><a class="shoppingCartColor" href="/Welcome/cart">Shopping Cart (5)</a></h2>
	</div>
	<div class="main_body">
		<p><a href='/Welcome'>Go Back<a></p>
		<h2>Black Belt for Staff</h2>
		<div class='images'>
			<img src="American cheese Getty Images.png" alt="Smiley face" height="250" width="250">
			<img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42">
			<img src="Cheese_Squares.jpg" alt="Smiley face" height="42" width="42">
			<img src="Vegan-Muenster-Cheese.jpg" alt="Smiley face" height="42" width="42">
			<img src="Cheese_Squares.jpg" alt="Smiley face" height="42" width="42">
			<img src="American cheese Getty Images.png" alt="Smiley face" height="42" width="42">
		</div>
		<div class='description'>
			<p>
				Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product... Description about the product...
			</p>
			<form action="/Welcome/add_to_cart" method="post">
				<select name="selection">
					<option value='1 ($19.99)'>1 ($19.99)</option>
					<option value='2 ($39.98)'>2 ($39.98)</option>
					<option value='3 ($59.97)'>3 ($59.97)</option>
				</select>
				<input type='submit' name='buy' value='Buy'>
			</form>
		</div>
	</div>
	<div>
		<h3>Similar Items</h3>
		<div class='products'>
			<div>
				<a href="/Welcome/product_desc"><img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42"></a>
				<p>$5.00</p>
				<p>Dutch Cheese</p>
			</div>
			<div>
				<a href="/Welcome/product_desc"><img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42"></a>
				<p>$2.00</p>
				<p>Yellow Cheese</p>
			</div>
			<div>
				<a href="/Welcome/product_desc"><img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42"></a>
				<p>$3.00</p>
				<p>Vegan Cheese</p>
			</div>
			<div>
				<a href="/Welcome/product_desc"><img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42"></a>
				<p>$5.00</p>
				<p>Cheese Squares</p>
			</div>
			<div>
				<a href="/Welcome/product_desc"><img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42"></a>
				<p>$2.25</p>
				<p>American Cheese</p>
			</div>				
		</div>		
	</div>
</body>
</html>