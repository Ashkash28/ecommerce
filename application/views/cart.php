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

.total{
	text-align: left;
}

.quantity{
	text-align: center;
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
	width: 175px;
}

.ccbox{
	margin-left: 24px;
	width: 175px;
}
.scbox{
	margin-left: 15px;
	width: 175px;
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
 		
<?php 
		if((!$this->session->userdata('cart'))OR (count($cart)<1))
		{ ?>
			<h2 id="shoppingCart"><a id="shoppingCartColor" href="/Welcome/cart">Shopping Cart (0)</a></h2>
<?php  	}
 		else
 		{ ?>
 		<h2 id="shoppingCart"><a id="shoppingCartColor" href="/Welcome/cart">Shopping Cart (<?= $this->session->userdata('cart')['total_items'] ?>)</a></h2>
<?php   }?>
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
<?php 	
        	 if((!$this->session->userdata('cart'))OR (count($cart)<1))
        	{ ?>
        		<tr class="even">
					<td class="item">&nbsp</td>
 					<td class="price"></td>
 					<td class="quantity"></td>
 					<td class="update"><a href="#top"></a></td>
 					<td class="total"></td>
				</tr>

<?php       }
				else
			{	
	          $i=1;
	          foreach($cart as $key => $value)
	          {            
	            if($key !== 'total_price')
	            { 
	              if($i%2)
	              {
	              	$rowColor = 'class="even"';
	          	  } 
	          	  else          	  
	          	  {
	          	  	$rowColor = 'class="odd"';
	          	  }?>
	              <tr <?=$rowColor?>>
	                <td class="item"><?= $value['name'] ?></td>
	                <td class="price"><?= $value['price'] ?></td>                
	                <form action="/Welcome/update/<?= $value['id']?>" method="post">
	                <td><input class="quantity" type="number" min="1" max="10" name="cartQuantity" value="<?= $value['quantity'] ?>"></td>
	                <td class="update"><input type='submit' name="update" value="update">
	                </form>    <a href="/Welcome/delete/<?= $value['id'] ?>">remove</a></td>
	                <td class="total">$ <?= number_format($value['total'],2) ?></td>
	              </tr>
	<?php     $i++;
       			}
          	  }  
          	}  ?>
			</tbody>
		</table>
	</div>
	<div id="cartTotal">
<?php 
		if((!$this->session->userdata('cart'))OR (count($cart)<1))
		{ ?>
			<h3>Total: $ --.--</h3>
<?php		$total_items=array();
			$this->session->set_userdata('cart')['total_items'];
 		}
		else
		{ ?>
		<h3>Total: $ <?= number_format($cart['total_price'],2) ?></h3>
<?php 	} ?>
		<a href="/Welcome"><button>Continue Shopping</button></a> 
	</div>
	<div id="shipping">
	    <h2>Shipping Information</h2>
		   <form action="/Welcome/pay" method="post">
		    <p>First Name: <input type="text" name="sfname" value="James"></p>
		    <p>Last Name: <input  type="text" name="slname" value="Kirk"</p>
		    <p>Address: <input class="abox" type="text" name="saddress" value="123 Galaxy way"></p>
		    <p>Address 2: <input class="abox2" type="text" name="saddress2" value="#F-139"></p>
		    <p>City: <input class="cbox" type="text" name="sCity" value="Riverside"></p>
		    <p>State: <input class="sbox" type="text" name="sState" value="IA"></p>
		    <p>Zipcode: <input class="zbox" type="number" name="sZipcode" value="65824"></p>
    </div>
    <div id="billing">
		<h2>Billing Info</h2>
		    <input type="checkbox" id="sas"> Same as Shipping
		    <p>First Name: <input class="fnbox" type="text" name="bfname" value="Mr"></p>
		    <p>Last Name: <input class="lnbox" type="text" name="blname" value="Spock"></p>
		    <p>Address: <input class="abox" type="text" name="baddress" value="55 planet road"></p>
		    <p>Address 2: <input class="abox2" type="text" name="baddress2"></p>
		    <p>City: <input class="cbox" type="text" name="bCity" value="Cape Canaviral"></p>
		    <p>State: <input class="sbox" type="text" name="bState" value="FL"></p>
		    <p>Zipcode: <input class="zbox" type="number" name="bZipcode" value="12345"></p>
		    <p>Card #: <input class="ccbox" type="number" name="cardnum" value="1234567887654321"></p>
		    <p>Security: <input class="scbox" type="number" name="security" value="123"></p>
		    <p>Expiration: <select class="month" type="month" name="month">
							   <option value="(mm)">(mm)</option>
							   <option value="01">Jan</option>
							   <option value="02">Feb</option>
							   <option value="03">Mar</option>
							   <option value="04">Apr</option>
							   <option value="05">May</option>
							   <option value="06">June</option>
							   <option value="07">July</option>
							   <option value="08">Aug</option>
							   <option value="09">Sept</option>
							   <option value="10">Oct</option>
							   <option value="11">Nov</option>
							   <option value="12">Dec</option>
							</select> / 
							<input class="year" type="number" min="2009" max="2019" name="year" value="year"></p>
		    <input class="pay" type="submit" value="Pay">
		   </form>
    </div>
 </body>
 </html>