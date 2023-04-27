<html>
<header>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
</header>
<body class = "mainBody">
<center>
<div class = "boxLogin">
	<form name="login-form" method="POST" action="loginProcess.php" >
		<table border="1" align="center">
			<tr>
				<td>Enter your Email ID</td>
				<td><label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com"></td>
			</tr>
			<tr>
				<td>Enter your Password</td>
				<td><input type="password" name="pwd" id="pwd" value = ""/></td>
			</tr>
			<tr style="height:40px;">
				<td align="center"></td>
				<td align="center"><input type="submit" style = "background-color: #ff6347;" value="Login"></td>
			</tr>
		</table>
		<?php
			if($_GET['login'] == 'fail')
				echo "<center>Email ID or password incorrect, try again</center>";
		?>
	</form>
</div>
</center>
</body>

</html>
