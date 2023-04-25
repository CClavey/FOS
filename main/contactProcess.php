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
	<a href = "home.php" class = "drp"><button style="width: 200px; height: 65px; font-size: 24px;" name = "return" id = "return">Homepage</button></a>

	<?php
		include("fos-db-connection.php");

		$emailID = $_POST['emailID'];
		$phoneNum = $_POST['phoneNum'];
		$feedback = $_POST['feedback'];

		$sql = "INSERT INTO feedback_tab (sID, emailID, phoneNum, feedback) 
				VALUES (NULL, '$emailID', '$phoneNum', '$feedback')";
		$result = $connect->query($sql);

		if($result == FALSE){
			echo "error:".$connect->error;
		} else {
			echo "<br><br><br>Feedback successfully sent";
		}
	?>

</center>
</body>
</html>
