<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="JS/scripts.js"></script>
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
						<h4>Email Address&ensp;&ensp;&ensp;<label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com"></h4>
						<h4>Phone&ensp;&ensp;&ensp;<input type="tel" name="phoneNum" id="phoneNum" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value = ""/></h4>
						<h4>Contact Reason&ensp;&ensp;&ensp;<select id = "reason" name = "reason" value = "reason">
							<option value = "Feedback">Feedback</option>
							<option value = "Complaint">Complaint</option>
							<option value = "Customer Support">Customer Support</option>
						</select></h4>
						<h4>Feedback&ensp;&ensp;&ensp;<textarea style="width:150px;height:100px;" name="feedback" id="feedback" value = ""></textarea></h4>
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="submit" name = "Submit" id = "Submit" value="Submit">
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
