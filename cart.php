<html>
<head>
<script src = "JS/scripts.js">
</script>
<link rel = "styleSheet" href = "CSS/styles.css">
<header>
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
		<br><br><button type="button">Checkout</button><br><br>
		<a href = "javascript:void(0)" onclick = "popupclose(<?php echo $cartFunction?>)" class=linktext><br>Close</a>
	</center>
	</p>
	</div>
	<div id="fade<?php echo $cartFunction?>" class="black_content"></div>
	</div>
	</center>
</header>
</head>
</html>
