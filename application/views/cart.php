 <html>
 <head>
 	<title>ecommerce cart</title>

<style type="text/css">
.header	{
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
	color: white;
}

#cartTable{
	border: solid 1px black;
	border-collapse: collapse;
	margin-top: 30px;
	margin-left: 150px;
}

#item{
	width: 250px;
	border: solid 1px black;
	background-color: gray;
	font-weight: bold;
	padding-left: 5px;

}

#price{
	width: 100px;
	border: solid 1px black;
	background-color: gray;
	font-weight: bold;
	padding-left: 5px;
}

#quantity{
	width: 60px;
	border-bottom: solid 1px black;
	background-color: gray;
	font-weight: bold;
	padding-left: 5px;
	border-right: none;
}

.quantity{
	border-right: none;
}

#update{
	width: 30px;
	border-left: none;
	border-bottom: solid 1px black;
	background-color: gray;
	font-weight: bold;
	padding-left: 5px;
}

#total{
	width: 100px;
	border: solid 1px black;
	background-color: gray;
	font-weight: bold;
	padding-left: 5px;
}
 .odd{
 	background-color: #E2E2E1;
 }

.item{
	width: 250px;
}

#cartTotal{
	margin-left: 600px;
}

button{
	margin-left: 10px;
	margin-top: -15px;
	background-color: green;
	color: white;
	box-shadow: 5px 5px 5px black;
	height: 30px;
	border: solid 1px black;
}
td{
	padding-left: 5px;
	border-right: solid black 1px;
}

body{
	width: 970px;
}

#shipping, #billing{
	margin-left: 150px;
}
#shoppingCartColor{
	color: white;
}

.abox{
	margin-left: 15px;
}

.abox2{
	margin-left: 3px;
}

.cbox{
	margin-left: 39px;
}

.sbox{
	margin-left: 35px;
}

.zbox{
	margin-left: 15px;
}

.ccbox{
	margin-left: 24px;
}
.scbox{
	margin-left: 15px;
}
.month{
	margin-left: 2px;
}

.pay{
	margin-left: 200px;
	background-color: blue;
	color: white;
	box-shadow: 5px 5px 5px black;
	border: solid 1px black;
}



</style>
 </head>
 <body>
 	<div class="header">
 		<h2 id="title">Dojo eCommerce</h2>
 		<h2 id="shoppingCart"><a id="shoppingCartColor" href="/Welcome/cart">Shopping Cart (5)</a></h2>
 	</div>
 	<div id="cart">
 		<table id="cartTable">
 			<thead>
 				<tr>
 					<td id="item">Item</td>
 					<td id="price">Price</td>
 					<td id="quantity">Quantity</td>
 					<td id="update"></td>
 					<td id="total">Total</td>
 				<tr>
 			</thead>
 			<tbody>
 				<tr class="odd">
 					<td class="item">Brooklyn Bridge</td>
 					<td class="price">$ 299.99</td>
 					<td class="quantity">1</td>
 					<td class="update"><a href="#top">update</a><img style="width:44px;height:38px" src="/Welcome/trash.png" ></td>
 					<td class="total">$ 299.99</td>
 				</tr>
				<tr>
					<td class="item">Brooklyn Bridge</td>
 					<td class="price">$ 299.99</td>
 					<td class="quantity">1</td>
 					<td class="update"><a href="#top">update</a> @</td>
 					<td class="total">$ 299.99</td>
 				</tr>
 				<tr class="odd">
 					<td class="item">Brooklyn Bridge</td>
 					<td class="price">$ 299.99</td>
 					<td class="quantity">1</td>
 					<td class="update"><a href="#top">update</a> @</td>
 					<td class="total">$ 299.99</td>
 				</tr>
				<tr>
					<td class="item">Brooklyn Bridge</td>
 					<td class="price">$ 299.99</td>
 					<td class="quantity">1</td>
 					<td class="update"><a href="#top">update</a> @</td>
 					<td class="total">$ 299.99</td>
 				</tr>
				<tr class="odd">
					<td class="item">&nbsp</td>
 					<td class="price"></td>
 					<td class="quantity"></td>
 					<td class="update"><a href="#top"></a></td>
 					<td class="total"></td>
				</tr>
				<tr>
					<td class="item">&nbsp</td>
 					<td class="price"></td>
 					<td class="quantity"></td>
 					<td class="update"><a href="#top"></a></td>
 					<td class="total"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="cartTotal">
		<h3>Total: $ 19,999.00</h3>
		<a href="/Welcome"><button>Continue Shopping</button></a> 
	</div>
	<div id="shipping">
	    <h2>Shipping Information</h2>
		   <form action="/Welcome/pay_success" method="post">
		    <p>First Name: <input type="text" name="sfname"></p>
		    <p>Last Name: <input  type="text" name="slname"></p>
		    <p>Address: <input class="abox" type="text" name="saddress"></p>
		    <p>Address 2: <input class="abox2" type="text" name="saddress2"></p>
		    <p>City: <input class="cbox" type="text" name="sCity"></p>
		    <p>State: <input class="sbox" type="text" name="sState"></p>
		    <p>Zipcode: <input class="zbox" type="text" name="sZipcode"></p>
    </div>
    <div id="billing">
		<h2>Billing Info</h2>
		    <input type="checkbox" id="sas"> Same as Shipping
		    <p>First Name: <input class="fnbox" type="text" name="bfname"></p>
		    <p>Last Name: <input class="lnbox" type="text" name="blname"></p>
		    <p>Address: <input class="abox" type="text" name="baddress"></p>
		    <p>Address 2: <input class="abox2" type="text" name="baddress2"></p>
		    <p>City: <input class="cbox" type="text" name="bCity"></p>
		    <p>State: <input class="sbox" type="text" name="bState"></p>
		    <p>Zipcode: <input class="zbox" type="text" name="bZipcode"></p>
		    <p>Card #: <input class="ccbox" type="text" name="cardnum"></p>
		    <p>Security: <input class="scbox" type="text" name="security"></p>
		    <p>Expiration: <select class="month" type="month" name="month">
							   <option value="(mm)">(mm)</option>
							   <option value="jan">Jan</option>
							   <option value="feb">Feb</option>
							   <option value="mar">Mar</option>
							   <option value="apr">Apr</option>
							   <option value="may">May</option>
							   <option value="june">June</option>
							   <option value="july">July</option>
							   <option value="aug">Aug</option>
							   <option value="sept">Sept</option>
							   <option value="Oct">Oct</option>
							   <option value="nov">Nov</option>
							   <option value="dec">Dec</option>
							</select> / 
							<input class="year" type="number" min="2009" max="2019" name="year" value="year"></p>
		    <input class="pay" type="submit" value="Pay">
		   </form>
    </div>
 </body>
 </html>