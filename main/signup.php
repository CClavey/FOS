<!DOCTYPE html>
<html lang="en-US">
<header>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</header>
<body class = "mainBody">

<div ng-app="myApp" ng-controller="myCtrl">
	<form name="signup-form" method="POST" action="signupProcess.php" >
		<table border="1" align="center" width="15%">
		<tr>
			<td> First Name</td>
			<td><input type="text" name="firstname" id="firstname"/></td>
		</tr>
		<tr>
			<td> Last Name</td>
			<td><input type="text" name="lastname" id="lastname"/></td>
		</tr>
		<tr>
			<td> Gender </td>
			<td><select id = "gender" name = "gender" value = "gender">
					<option value = "Male">Male</option>
					<option value = "Female">Female</option>
				</select></td>
		<tr>
			<td> Date of Birth</td>
			<td><input type="date" name="dob" id="dob" value = "dob"/></td>
		</tr>
			<td> Email ID</td>
			<td><label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com"></td>
		</tr>
		<tr>
			<td> Password</td>
			<td><input type="password" ng-model="pwd" ng-change="checkPwd()" name="pwd" id="pwd"/></td>
		</tr>
		<tr>
			<td> Confirm Password</td>
			<td><input type="password" ng-model="confirm" ng-change="checkPwd()" name="confirm" id="confirm"/><br/> {{match}} </td>
		</tr>
		<tr style="height:40px;">
			<td align="center"></td>
			<td align='center'><input type='submit' id="submit" value='Signup'/></td>
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
		  document.getElementById("submit").disabled = false;
	  } else {
		  $scope.match = "Passwords don't match!";
		  document.getElementById("submit").disabled = true;
	  }
  }
});
</script>
</body>
</html>
