<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
	<center>
		<form name="contact-form" method="POST" action="contactProcess.php">
			<table class="mainTable">
				<tr>
					<td colspan="2">
						<hr>
					</td>
				</tr>
				<tr>
					<td colspan="2" class = "tdMain">
						<h4>First Name&ensp;&ensp;&ensp;<input type="text" name="firstname" id="firstname" value = ""/></h4>
						<h4>Last Name&ensp;&ensp;&ensp;<input type="text" name="lastname" id="lastname" value = ""/></h4>
						<h4>Email Address&ensp;&ensp;&ensp;<input type="text" name="emailID" id="emailID" value = ""/></h4>
						<h4>Phone&ensp;&ensp;&ensp;<input type="text" name="phoneNum" id="phoneNum" value = ""/></h4>
						<h4>Contact Reason&ensp;&ensp;&ensp;<select id = "reason" name = "reason" value = "reason">
							<option value = "Feedback">Feedback</option>
							<option value = "Complaint">Complaint</option>
							<option value = "Customer Support">Customer Support</option>
						</select></h4>
						<h4>Feedback&ensp;&ensp;&ensp;<input type="textarea" name="feedback" id="feedback" value = ""/></h4>
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="submit" value="Submit">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<hr>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>
