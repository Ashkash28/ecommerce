<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Orders</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#statusform').on('click', function(){
			$.post(
				$('#statusform').attr('action'),
				$('#statusform').serialize();
		}) return false;
	});
	</script>
	<style>
	body{
		width:970px;
	}
/*	CSS FOR SEARCH BAR

*/	#search{
		width:970px;
		display: inline-block;
	}
	.search-box{
			width: 400px;
			border-radius:10px;
			display: inline-block;
		}
		.search-form{
			display:inline-block;
		}
		#add-form{
			display:inline-block;
		}
		#add-new-product{
			background-color:blue;
			color:white;
		}
		.header {
		 background-color: #CC0000;
		 height: 60px;
		 color: white;
		}
		h1 {
			font-size:20px;
			display:inline;
			margin-left:20px;
			margin-top:30px;
		}
		ul{
			display:inline-block;
		}
		li {
			display:inline;
			margin-right: 20px;
		}
		#log-off{
			display:inline-block;
			float:right;
			margin-right: 50px;
		}
		.orders-products:link {
			color:white;
			text-decoration:none;
		}
		.orders-products:visited {
			color:white;
			text-decoration:none;
		}
		.orders-products:hover{
			text-decoration:underline;
		}
		.orders-products:active{
			text-decoration:underline;
		}
/*		CSS FOR TABLE

*/		table{
			border: 1px solid black;
			border-collapse: collapse;
			width:950px;
			margin-top: 10px;
		}
		th{
			background-color: #989898;
			border: 1px solid black;
			border-collapse: collapse;
		}
		td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		.gray{
			background-color: #C8C8C8;
		}
		.show{
			margin-left: 430px;
			vertical-align: top;
			display: inline;
		}
/*		CSS FOR UL
*/		ul{
		display: inline-block;
		}
		.numbers li{
			border-right: 1px solid black;
			padding-left: 10px;
			padding-right: 10px;
		}
		li:last-child{
			border-right: none;
		}
		.numbers{
			margin-left: 150px;
		}
	</style>
</head>
<body>
	<div class='header'>
			<h1>Dashboard</h1>
				<ul>
					<li><a class='orders-products' href='/Welcome/search'>Orders</a></li>
					<li><a class='orders-products' href='/Welcome/orders'>Products</a></li>
				</ul>
			<p id='log-off'><a class='orders-products' href='/Admins/logout'>log off</a></p>
	</div>

	<div id="search">
		<form class='search-form' action='' method='get'>
				<input class='search-box' type='text' name='search' placeholder='search'>
		</form>
		<select class="show" name="show">
			<option value="Show All">Show All</option>
			<option value="Order In">Order in process</option>
			<option value="Shipped">Shipped</option>
		</select>
		<!-- <form id='add-form'action='' method='post'>
				<input id='add-new-product' type='submit' value='Add New Product'>
		</form> -->
	</div>

	<table>
		<thead>
			<th>Order ID</th>
			<th>Name</th>
			<th>Date</th>
			<th>Billing Address</th>
			<th>Total</th>
			<th>State of Order</th>
		</thead>
		<tbody>
			<?php
				foreach($customers as $key => $value) {
					if($key%2 == 0) {
					?>

					 <tr class="gray">
					 	<form action="/Admins/order_id/<?=$value['id']?>" method="post">
							<td><input type="Submit" name="id_holder" value="<?=$value['id']?>"></td>
							<td><?=$value['first_name']?></td>
							<td><?=$value['order_date']?></td>
							<td><?=$value['address']?></td>
							<td>$<?=$value['total']?></td>
							<td>
								<select action="/Admins/change_status" id="statusform" name="status">
									<option value="Shipped">Shipped</option>
									<option value="Order in Process">Order in process</option>
									<option value="Cancelled">Cancelled</option>
								</select>
							</td>
						</form>
					</tr>

				<?php } else { ?>

				 <tr>
				 	<form action="/Admins/order_id/<?=$value['id']?>" method="post">
						<td><input type="Submit" name="id_holder" value="<?=$value['id']?>"></td>
						<td><?=$value['first_name']?></td>
						<td><?=$value['order_date']?></td>
						<td><?=$value['address']?></td>
						<td>$<?=$value['total']?></td>
						<td>
							<select action="/Admins/change_status" id="statusform" name="status">
								<option value="Shipped">Shipped</option>
								<option value="Order in Process">Order in process</option>
								<option value="Cancelled">Cancelled</option>
							</select>
						</td>
					</form>
				</tr>
				<?php } ?>


			<?php } ?>
			<!-- <tr class="gray">
				<td><a href="/Welcome/order_id">100</a></td>
				<td>Bob</td>
				<td>9/6/2014</td>
				<td>123 dojo way Belevue WA 98005</td>
				<td>$149.99</td>
				<td>
					<select name="state">
						<option value="Shipped">Shipped</option>
						<option value="Order in Process">Order in process</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><a href="/Welcome/order_id">99</a></td>
				<td>Joe</td>
				<td>9/6/2014</td>
				<td>123 dojo way Belevue WA 98005</td>
				<td>$29.99</td>
				<td>
					<select name="state">
						<option value="Shipped">Shipped</option>
						<option value="Order in Process">Order in process</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</td>
			</tr>
			<tr class="gray">
				<td><a href="/Welcome/order_id">98</a></td>
				<td>Joey</td>
				<td>9/6/2014</td>
				<td>123 dojo way Belevue WA 98005</td>
				<td>$29.99</td>
				<td>
					<select name="state">
						<option value="Shipped">Shipped</option>
						<option value="Order in Process">Order in process</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><a href="/Welcome/order_id">97</a></td>
				<td>Joey</td>
				<td>9/6/2014</td>
				<td>123 dojo way Belevue WA 98005</td>
				<td>$29.99</td>
				<td>
					<select name="state">
						<option value="Shipped">Shipped</option>
						<option value="Order in Process">Order in process</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</td>
			</tr>
			<tr class="gray">
				<td>...</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<select name="state">
						<option value="Shipped">Shipped</option>
						<option value="Order in Process">Order in process</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><a href="/Welcome/order_id">51</a></td>
				<td>Bob</td>
				<td>9/6/2014</td>
				<td>123 dojo way Bellevue WA 98005</td>
				<td>$99.99</td>
				<td>
					<select name="state">
						<option value="Shipped">Shipped</option>
						<option value="Order in Process">Order in process</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</td>
			</tr> -->
		</tbody>
	</table>

	<div class="numbers">
		<ul>
			<li><a href="/Welcome/search">1</a></li>
			<li><a href="/Welcome/search">2</a></li>
			<li><a href="/Welcome/search">3</a></li>
			<li><a href="/Welcome/search">4</a></li>
			<li><a href="/Welcome/search">5</a></li>
			<li><a href="/Welcome/search">6</a></li>
			<li><a href="/Welcome/search">7</a></li>
			<li><a href="/Welcome/search">8</a></li>
			<li><a href="/Welcome/search">9</a></li>
			<li><a href="/Welcome/search">10</a></li>
			<li><a href="/Welcome/search"> -> </a></li>	
		</ul>
	</div>
</body>
</html>