<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
<center>
<div class = "boxCheckout">
		<form name="checkout-form" method="POST" action="checkoutProcess.php" onsubmit = "return writeHidden()">
			<table>
				<tr>
					<td colspan="2">
						<hr>
					</td>
				</tr>
				<tr>
					<td colspan="2" class = "tdMain">
						<h4>First Name&ensp;&ensp;&ensp;<input type="text" name="firstname" id="firstname" value = ""/></h4>
						<h4>Last Name&ensp;&ensp;&ensp;<input type="text" name="lastname" id="lastname" value = ""/></h4>
						<h4>Email Address&ensp;&ensp;&ensp;<label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com"></h4>
						<h4>Country&ensp;&ensp;&ensp;<select id = "country" name = "country" value = "country">
						<option value = "United States">United States</option>
						</select></h4>
						<h4>State&ensp;&ensp;&ensp;<select id = "state" name = "state" value = "state">
						<option value = "Arkansas">Arkansas</option>
						</select></h4>
						<h4>City&ensp;&ensp;&ensp;<select id = "city" name = "city" value = "city">
						<option value = "Siloam Springs">Siloam Springs</option>
						</select></h4>
						<h4>Zip Code&ensp;&ensp;&ensp;<input type="text" name="zip" id="zip" maxlength="5" value = ""/></h4>
						<h4>Card Number&ensp;&ensp;&ensp;<input type="tel" name = "card" id = "card" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx"></h4>
						<h4>Expiration&ensp;&ensp;&ensp;<input type="date" name="exp" id="exp" value = ""/></h4>
						<h4>CVC&ensp;&ensp;&ensp;<input type="text" name="cvc" id="cvc" maxlength="3" value = ""/></h4>
						<input type="hidden" name="cartContents" id = "cartContents" value="" />
						<input type = "hidden" name = "totalHidden" id = "totalHidden" value = ""/>
						<input type = "hidden" name = "instructsHidden" id = "instructsHidden" value = ""/>
						<h4>Checkout&ensp;&ensp;&ensp;<input type="submit" style = "background-color: #ff6347;" value="Submit"></h4>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<hr>
					</td>
				</tr>
			</table>
		</form>
</div>
</center>
</body>

</html>
