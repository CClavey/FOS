<html>
<header>
<link rel = "styleSheet" href = "CSS/styles.css">
<script src = "JS/scripts.js">
</script>
<?php $cartFunction = 100000?>
<center>
	<body class = "mainBody" onload = "popupclose(<?php echo $cartFunction?>)" bgcolor="#fff">
	<ul style="background-color:#f13e36;">
		<p><li class="logo-bar"><a href="home.php" class = "drp"><img src = "Images/newlogo.png"  height = "50px" width = "100px"></a>
		</li><p>
		
		<li class="menu-item"><a href="menu.php" class="drp">Menu</a>
		</li>
		
		<li class="menu-item"><a href="deals.php" class="drp">Deals</a>
		</li>
		
		<li class="menu-item"><a href="order.php" class="drp">Order</a>
		</li>
		
		<li class="menu-item"><a href="contact.php" class="drp">Contact Us</a>
		</li>
		
		<li class="menu-item"><a href="#" id="target" onclick="setUser()" class="drp">Account</a>
		</li>
		<script>
			function setUser() {
				document.getElementById('target').href = "account.php?user=" + localStorage.getItem('email');
			}
		</script>
		
		<li class="menu-item"><?php include ("cart.php");?>
		</li>
	</ul>
</center>
</header>
</html>
