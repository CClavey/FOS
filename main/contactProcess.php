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
		$phoneNum = $_POST['phoneNum'];
		$feedback = $_POST['feedback'];

		$sql = "INSERT INTO feedback_tab (sID, emailID, phoneNum, feedback) 
				VALUES (NULL, '$emailID', '$phoneNum', '$feedback')";
		$result = $connect->query($sql);

		if($result == FALSE){
			echo "error:".$connect->error;
		} else {
			?>
			<?php
			header('Location: home.php');
		}
	?>

</center>
</body>
</html>
