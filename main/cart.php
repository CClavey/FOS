<html>
<head>
<script src = "JS/scripts.js">
</script>
<link rel = "styleSheet" href = "CSS/styles.css">
<body>
	<center>
<a href = "javascript:void(0)" onclick = "popupfunction(<?php echo $cartFunction?>);" class=linktext>
		<img class="cart1" src="Images/cart.png" height = "45px" width = "50px"/>
	</a>
	<div id="popup<?php echo $cartFunction?>" class="white_content">
	<p><br>
		<div class="cartpopup" id="mycart">
		<div id="mycart" class="cartcount"></div>
	</div>
	<center>
		<br><br><input type = "text" name = "total" id = "total" value = "Cart is empty!" readonly/>
		<br><br><a href = "checkout.php" class ="drp"><button style="background-color: #ff6347;" type="button">Checkout</button></a>
		<br><button style="background-color: #ff6347;" type="button" onclick = "clearCart(); popupclose(<?php echo $cartFunction?>);">Clear Cart</button>
		<a href = "javascript:void(0)" onclick = "popupclose(<?php echo $cartFunction?>)" class=linktext><br>Close</a>
		<script>
			writeCart();
		</script>
	</center>
	</p>
	</div>
	<div id="fade<?php echo $cartFunction?>" class="black_content"></div>
	</div>
	</center>
</body>
</head>
</html>
