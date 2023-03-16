<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
	<center>
		<table class="mainTable">
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			<tr>
				<td colspan="2" class = "tdMain">
					<h4>First Name&ensp;&ensp;&ensp;<input type="text" name="fName" id="fName" value = ""/></h4>
					<h4>Last Name&ensp;&ensp;&ensp;<input type="text" name="lName" id="lName" value = ""/></h4>
					<h4>Email Address&ensp;&ensp;&ensp;<input type="text" name="emailA" id="emailA" value = ""/></h4>
					<h4>Phone&ensp;&ensp;&ensp;<input type="text" name="emailA" id="emailA" value = ""/></h4>
					<h4>Contact Reason&ensp;&ensp;&ensp;<select id = "reason" name = "reason" value = "reason">
						<option value = "Feedback">Feedback</option>
						<option value = "Complaint">Complaint</option>
						<option value = "Customer Support">Customer Support</option>
					</select></h4>
					<h4>Phone&ensp;&ensp;&ensp;<input type="textarea" name="emailA" id="emailA" value = ""/></h4>
					<h4>Checkout&ensp;&ensp;&ensp;<a href = "contactProcess.php" class = "drp"><input type = "submit" name = "Submit" id = "Submit"></a></h4>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
		</table>
	</center>
</body>

</html>