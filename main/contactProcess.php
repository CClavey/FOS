<html>
<head>
<?php 
	include ("header.php")
?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</head>

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
		} 
		else 
		{ ?>
			<script>
				alert("Form Received!");
				window.location.href = "home.php";
			</script>
	<?php
		}
	?>

</center>
</body>
</html>
