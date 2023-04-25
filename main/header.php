<html>
<header>
<?php session_start() ?>
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
		
		<?php
		if(!isset($_SESSION['emailID'])) {
			echo "	<li class='menu-item'><a href='index.php' class='drp'>Signup/Login</a>
					</li>
		
					<li class='menu-item'>";
					include('cart.php');
					
			echo "	</li>";
		} else {
			echo "	<li class='menu-item'><a href='account.php' class='drp'>Account</a>
					</li>
					
					<li class='menu-item'>";
					include('cart.php');
					
			echo "	</li>	
		
					<li class='menu-item'><a href='index.php' class='drp'>Logout<img src = 'Images/logout.png' height = '20px' width = '20px'></a>
					</li>";
		}
		?>
	</ul>
</center>
</header>
</html>
