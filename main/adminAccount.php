<!DOCTYPE html>
<html lang="en-US">
<header>
<?php 
	session_start();
if(!isset($_SESSION['emailID']) || $_SESSION['a'] != 'a') {
	echo "BAD Page. <a href='index.php'>Login</a> again.";
} else {
	include ("adminHeader.php");
?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</header>

<center>
<body class = "mainBody">

<div class = "boxDetails" ng-app="myApp" ng-controller="myCtrl">
<form name="account-form" method="POST" action="adminProcess.php" >
<table>
<tr>
	<td colspan="2">
		<hr>
	</td>
	<td colspan="2">
		<hr>
	</td>
</tr>
<tr>
	<td colspan="2" class = "tdMain">
					<h1>Account Details</h1>
					<br>
					
					<?php
						include("fos-db-connection.php");

						$emailID = $_SESSION['emailID'];

						$sql = "SELECT * FROM users_tab WHERE emailID = '".$emailID."'";
						$result = $connect->query($sql);
						$row = $result->fetch_assoc();
						
						echo "<h3>Email: ".$emailID."</h3><br>";
							
?>
	</td>
	<td colspan='2' class = 'tdMain'>
<?php
						echo "<h1>Update Details</h1>
							<br>
							<h3>Update Email: <input type = 'text' name = 'updateEmail' id = 'updateEmail' value='".$emailID."'/></h3>
							<h3>Update Password: <input type='password' ng-model='pwd' ng-change='checkPwd()' name='updatePwd' id='updatePwd' value='".$row['pwd']."'/></h3>
							<h3>Confirm Password: <input type='password' ng-model='confirm' ng-change='checkPwd()' name='confirm' id='confirm' value='".$row['pwd']."'/><br/> {{match}} </h3>
							<h3><a href = 'detailsProcess.php' class ='drp'><button style = 'background-color: #ff6347' name = 'update' id = 'update'>Update</button></a>";
	?>
	</td>
</tr>
<tr>
	<td colspan="2">
		<hr>
	</td>
	<td colspan="2">
		<hr>
	</td>
</tr>
</table>
</form>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
  $scope.pwd = "";
  $scope.confirm = "";
  $scope.match = "";
  $scope.checkPwd = function() {
	  if(angular.equals($scope.pwd, $scope.confirm)){
		  $scope.match = "";
		  document.getElementById("update").disabled = false;
	  } else {
		  $scope.match = "Passwords don't match!";
		  document.getElementById("update").disabled = true;
	  }
  }
});
</script>
<?php } ?>
</body>
</center>

</html>
