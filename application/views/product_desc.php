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
	.products {
		margin: 10px;
		display: inline-block;
	}

	.images {
		width: 350px;
		height: 360px;
		margin-top: 10px;
		margin-right: 10px;
	}
	
	img{
		margin-top: 10px;
		margin-right: 5px;
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
	#similar{
		margin-bottom: -15px;
		margin-top: 20px;
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
		<h2><?=$product['name']?></h2>
		<div class='images'>
	<?php 	for($i=0;$i<count($prod_pictures);$i++)
			{
				if($prod_pictures[$i]['main']==1)
				{ ?>
				<img src="<?=$prod_pictures[$i]['description']?>" alt="Smiley face" height="300" width="300">
	<?php 		} 
			} ?>	
	<?php 	for($i=0;$i<count($prod_pictures);$i++)
			{
				if($prod_pictures[$i]['main']!=1)
				{ ?>
				<img src="<?=$prod_pictures[$i]['description']?>" alt="Smiley face" height="50" width="50">
	<?php 		} 
			} ?>
		</div>
		<div class='description'>
			<p><?=$product['description']?></p>
			<form action="/Welcome/add_to_cart" method="post">
				<select name="selection">
					<option value='1'>1 ($<?= number_format($product['price']*1,2)?>)</option>
					<option value='2'>2 ($<?= number_format($product['price']*2,2)?>)</option>
					<option value='3'>3 ($<?= number_format($product['price']*3,2)?>)</option>
				</select>
				<input type='submit' name='buy' value='Buy'>
			</form>
		</div>
	</div>
	<div>
		<h2 id="similar">Similar Items</h2>
<?php 	for($i=0;$i<count($categories);$i++)
		{
			if($categories[$i]['id'] != $product['id'])
			{	?>
				<div class='products'>
					<div>
						<a href="/Welcome/product_desc/<?=$categories[$i]['id']?>"><img src="<?=$product_id_2[0]['description']?>" alt="Smiley face" height="75" width="75"></a>
						<p>$<?= number_format($categories[$i]['price'],2)?></p>
						<p><?=$categories[$i]['name']?></p>
					</div>			
				</div>
<?php		}
		
 		}?>		
	</div>
</body>
</html>