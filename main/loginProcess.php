<?php

include("header.php");
include("orderHeader.php");

include("fos-db-connection.php");

$emailID = $_POST['emailID'];
$password = $_POST['pwd'];

$sql = "SELECT pwd FROM users_tab WHERE emailID = '".$emailID."'"; //this is susceptible to SQL injection, but i forgot how to do safe queries
$result = $connect->query($sql);
$pwd = mysqli_fetch_assoc($result);

if($password == $pwd['pwd']) {
	echo "<br><br><br><center>Login Successful</center>";
} else {
	header("Location: login.php?login=fail");
	exit();
}
?>
