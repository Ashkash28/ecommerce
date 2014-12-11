<html>
<head>
	<title>All Products</title>	

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

	.category {
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
			<form action="/Welcome/search" method="post">
				<input type='search' name="productName">
				<input type='submit' name="search" value="search">
			</form>
			<ul>
				<li>Categories</li>
					<ul>
<?php 
			foreach($categories as $key)
			{ ?>
				<li><a href="/Welcome/product_category/<?= $key['category']?>"><?= $key['category']." (".$key['count']?>)</a></li>
<?php		} ?>
					</ul>
				<li><a href="/Welcome/">Show All</a></li>
			</ul>
		</div>

		<div class='products_view'>
			<div class='products_title'>
				<p class='category'><?=$category?></p>
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
<?php 
			foreach($product as $key)
			{ ?>
				<div>
					<a href="/Welcome/product_desc/<?=$key['id']?>"><img src="<?=$key['description']?>" alt="Smiley face" height="200" width="200"></a>
					<p><?=$key['price']?></p>
					<p><?=$key['name']?></p>
				</div>
<?php		} ?>
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