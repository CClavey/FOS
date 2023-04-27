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
		$totalPrice = $_POST['totalHidden'];
		$orderContents = mysqli_real_escape_string($connect, $_POST['cartContents']);
		$instructions = $_POST['instructsHidden'];

		$sql = "INSERT INTO checkout_tab (emailID, country, state, city, zip, cardNum, exp, cvc) 
				VALUES ('$emailID', '$country', '$state', '$city', '$zip', '$cardNum', '$exp', '$cvc')";
		$result = $connect->query($sql);
		$sql2 = "INSERT INTO orders_tab (totalPrice, orderContents, instructions) 
				VALUES ('$totalPrice', '$orderContents', '$instructions')";
		$result2 = $connect->query($sql2);

		if(($result == FALSE) || ($result2 == FALSE)){
			echo "error:".$connect->error;
		} else {
			?>
			<script>
				clearCart();
				alert("Order Created!");
				window.location.href = "home.php";
			</script>
			<?php
		}
	?>

</center>
</body>
</html>
