<html>
<header>
	<?php include ("header.php") ?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
</header>
<body>
<div class = "loginDIV" id = "loginDIV">
	<table border="1" align="center" width="17%">
		<tr>
			<td>Enter your Email ID</td>
			<td><input type="text" name="emailID2" id="emailID2" value = ""/></td>
		</tr>
		<tr>
			<td>Enter your Password</td>
			<td><input type="text" name="pwd" id="pwd" value = ""/></td>
		</tr>
		<tr>
			<td align="center"><h3><button name = "reset" id = "reset" onclick = "reset()">Reset</button><h3></td>
			<td align="center"><h3><a href = "home.php" class = "drp"><button name = "login" id = "login" onclick = "display()">Login</button></a><h3></td>
		</tr>
	</table>
</div>

</body>

</html>
