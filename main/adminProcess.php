<html>
<header>
<?php 
	include ("adminHeader.php");
	session_start();
?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body>
<center>
	<?php
		include("fos-db-connection.php");

		$emailID = $_POST['updateEmail'];
		$pwd = $_POST['updatePwd'];

		$sql = "SELECT * FROM users_tab WHERE emailID = '".$_SESSION['emailID']."'";
		$result = $connect->query($sql);
		$row = $result->fetch_assoc();
		
		if($pwd == null)
			$pwd = $row['pwd'];

		$sql = "UPDATE users_tab SET emailID = '$emailID', pwd = '$pwd' WHERE sid = '".$row['sid']."'";
		$result = $connect->query($sql);

		if($result == FALSE){
			echo "error:".$connect->error;
		} else {
			?>
			<script>
				alert("Account Updated!");
				window.location.href = "adminAccount.php";
			</script>
			<?php
			$_SESSION['emailID'] = $emailID;
		}
	?>
</center>
</body>
</html>
