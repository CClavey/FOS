<html>
<header>
<?php 
	include ("header.php")
?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body>
<center>
	<a href = "home.php" class = "drp"><button style="width: 200px; height: 65px; font-size: 24px;" name = "return" id = "return">Return</button></a>

	<?php
		include("fos-db-connection.php");

		$emailID = $_POST['emailID'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$zip = $_POST['zip'];
		$cardNum = $_POST['card'];
		$exp = $_POST['exp'];
		$cvc = $_POST['cvc'];

		$sql = "INSERT INTO checkout_tab (sid, emailID, country, state, city, zip, cardNum, exp, cvc) 
				VALUES (NULL, '$emailID', '$country', '$state', '$city', '$zip', '$cardNum', '$exp', '$cvc')";
		$result = $connect->query($sql);

		if($result == FALSE){
			echo "error:".$connect->error;
		} else {
			echo "<br><br><br>Order Successfully added";
		}
	?>

</center>
</body>
</html>
