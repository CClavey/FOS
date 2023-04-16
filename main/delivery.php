<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="JS/scripts.js"></script>
</header>

<body class = "mainBody">
	<center>
		<form name="contact-form" method="POST" action="orderProcess.php">
			<table class="mainTable">
				<tr>
					<td colspan="2">
						<hr>
					</td>
				</tr>
				<tr>
					<td colspan="2" class = "tdMain">
						<h4>Address&ensp;&ensp;&ensp;<input type="text" name="address" id="address" value = ""/></h4>
						<h4>Phone&ensp;&ensp;&ensp;<input type="tel" name="phoneNum" id="phoneNum" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value = ""/></h4>
						<h4>Zip Code&ensp;&ensp;&ensp;<input type="text" name="zip" id="zip"/></h4>
						<h4>City&ensp;&ensp;&ensp;<input type="text" name="city" id="city" value = ""/></h4>
						<h4>State&ensp;&ensp;&ensp;<input type="text" name="state" id="state" value = ""/></h4>
						<h4>Other Information&ensp;&ensp;&ensp;<textarea style="width:150px;height:100px;" name="other" id="other" value = ""></textarea></h4>
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="submit" name = "Submit" id = "Submit" value="Submit">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<hr>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>