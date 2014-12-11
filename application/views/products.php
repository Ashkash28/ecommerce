<html>
<head>
	<title>User page 1</title>	

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

	#shoppingCartColor{
		color: white;
	}

	.products_index{
		border: solid 1px black;
		width: 200px;
		margin-top: 10px;
		margin-right: 10px;
	}

	.products_view{
		
		border: solid 1px black;
		width: 750px;
		height: 500px;
		margin-top: 10px;

	}

	.products_title p{
		display: inline-block;
	}

	.products div{
		margin: 10px;
		display: inline-block;
	}

	.products_index, .products_view {

		display: inline-block;
		vertical-align: top;
	}

	.page_toggle p{
		display: inline-block;
	}

	.shirt {
		font-size: 32px;
		margin-right: 300px;

	}

	
</style>
</head>

<body>
 	<div class="header">
 		<h2 id="title">Dojo eCommerce</h2>
 		<h2 id="shoppingCart"><a id="shoppingCartColor" href="/Welcome/cart">Shopping Cart (<?= $this->session->userdata('cart')['total_items'] ?>)</a></h2>
 	</div>
	<div class="main_body">

		<div class="products_index">
			<form>
				<input type='search' value='product name'>
				<input type='submit'>
			</form>
			<ul>
				<li>Categories</li>
					<ul>
						<li><a href="">T-shirts (<insert number)</a></li>
						<li><a href="">Shoes (35)</a></li>
						<li><a href="">Cups (5)</a></li>
						<li><a href="">Fruits (105)</a></li>
						<li><a href="">Show all</a></li>
					</ul>
			</ul>
		</div>

		<div class='products_view'>
			<div class='products_title'>
				<p class='shirt'>T-shirts (page 2<show page number>)</p>
				<p><a href="">first</a>| </p>
				<p><a href="">previous</a>| </p>
				<p>2| </p>
				<p><a href="">next</a></p>
			</div>
			<p>Sorted by</p>
			<select>
				<option value='Price'>Price</option>
				<option value='Most Popular'>Most Popular</option>
			</select>
		
			<div class='products'>
				<div>
					<a href="/Welcome/product_desc/1"><img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$5.00</p>
					<p>Dutch Cheese</p>
				</div>
				<div>
					<a href="/Welcome/product_desc/1"><img src="Yellow-Cheese.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$2.00</p>
					<p>Yellow Cheese</p>
				</div>
				<div>
					<a href="/Welcome/product_desc/1"><img src="Vegan-Muenster-Cheese.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$3.00</p>
					<p>Vegan Cheese</p>
				</div><div>
					<a href="/Welcome/product_desc/1"><img src="Cheese_Squares.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$5.00</p>
					<p>Cheese Squares</p>
				</div>
				<div>
					<a href="/Welcome/product_desc"><img src="American cheese Getty Images.png" alt="Smiley face" height="42" width="42"></a>
					<p>$2.25</p>
					<p>American Cheese</p>
				</div>
				<div>
					<a href="/Welcome/product_desc"><img src="cheese-dutchleerdammer.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$5.00</p>
					<p>Dutch Cheese</p>
				</div>
				<div>
					<a href="/Welcome/product_desc"><img src="Yellow-Cheese.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$2.00</p>
					<p>Yellow Cheese</p>
				</div>
				<div>
					<a href="/Welcome/product_desc"><img src="Vegan-Muenster-Cheese.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$3.00</p>
					<p>Vegan Cheese</p>
				</div><div>
					<a href="/Welcome/product_desc"><img src="Cheese_Squares.jpg" alt="Smiley face" height="42" width="42"></a>
					<p>$5.00</p>
					<p>Cheese Squares</p>
				</div>
				<div>
					<a href="/Welcome/product_desc"><img src="American cheese Getty Images.png" alt="Smiley face" height="42" width="42"></a>
					<p>$2.25</p>
					<p>American Cheese</p>
				</div>
			</div>
			<div class='page_toggle'>
				<p><a href="">1</a>|</p>
				<p>2</a>|</p>
				<p><a href="">3</a>|</p>
				<p><a href="">4</a>|</p>
				<p><a href="">5</a>|</p>
				<p><a href="">6</a>|</p>
				<p><a href="">7</a>|</p>
				<p><a href="">8</a>|</p>
				<p><a href="">9</a>|</p>
				<p><a href="">10</a>|</p>
				<p><a href="">-></a></p>
			</div>
		</div>	
	</div>

</body>
</html>