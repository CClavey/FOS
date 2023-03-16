<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
	<center>
		<table class="mainTable">
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			<tr>
				<td colspan="2" class = "tdMain">
					<h4>First Name&ensp;&ensp;&ensp;<input type="text" name="fName" id="fName" value = ""/></h4>
					<h4>Last Name&ensp;&ensp;&ensp;<input type="text" name="lName" id="lName" value = ""/></h4>
					<h4>Email Address&ensp;&ensp;&ensp;<input type="text" name="emailA" id="emailA" value = ""/></h4>
					<h4>Country&ensp;&ensp;&ensp;<select id = "country" name = "country" value = "country">
					<option value = "United States">United States</option>
					</select></h4>
					<h4>State&ensp;&ensp;&ensp;<select id = "state" name = "state" value = "state">
					<option value = "Arkansas">Arkansas</option>
					</select></h4>
					<h4>Siloam Springs&ensp;&ensp;&ensp;<select id = "city" name = "city" value = "city">
					<option value = "Siloam Springs">Siloam Springs</option>
					</select></h4>
					<h4>Zip Code&ensp;&ensp;&ensp;<input type="text" name="zip" id="ip" value = ""/></h4>
					<h4>Card Number&ensp;&ensp;&ensp;<input type="text" name="card" id="card" value = ""/></h4>
					<h4>Expiration&ensp;&ensp;&ensp;<input type="date" name="exp" id="exp" value = ""/></h4>
					<h4>CVC&ensp;&ensp;&ensp;<input type="text" name="cvc" id="cvc" value = ""/></h4>
					<h4>Checkout&ensp;&ensp;&ensp;<a href = "checkoutProcess.php" class = "drp"><input type = "submit" name = "Submit" id = "Submit"></a></h4>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
		</table>
	</center>
</body>

</html>