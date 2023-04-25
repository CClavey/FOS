<html>
<header>
<?php 
session_start();
if(!isset($_SESSION['emailID']) || $_SESSION['emailiD'] != "fos.admin@gmail.com") {
	echo "BAD Page. <a href='index.php'>Login</a> again.";
} else {
	include ("adminHeader.php");
	include ("fos-db-connection.php");
	if(isset($_POST['id']))
		$connect->query("DELETE FROM orders_tab WHERE sID='".$_POST['id']."'");?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="scripts.js"></script>
	</header>

	<body class = "mainBody">
	<h1 align=center>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Open Orders</h1>
	<br><br><br><br><br><br>
	<?php
			$sql1="SELECT * FROM orders_tab";
			$result1=$connect->query($sql1);
			echo "<center>";
			echo "<table align=center>";
			while($row1 = $result1->fetch_assoc())
			{
				echo "<tr>";
				echo "<td align  = center>";
				?>
					<div class = "box" style = "width: 600px;font-size: 18px;" >
					<?php echo $row1['instructions']?><br>
					<?php echo $row1['orderContents']?>
					</div>
					<div class = "box" style = "width: 300px;font-size: 18px;">
					<?php echo "Price: $" . $row1['totalPrice']?><br>
					
					<form id="remove" method="POST" action="">
						<input type="hidden" id="id" name="id" required>
						<button type = "button" style="background-color: #ff6347;" onclick="remove(<?php echo $row1['sID'] ?>)">Remove Order</button>
					</form>
					</div>
					<script>
						function remove(i) {
							document.getElementById("id").value = i;
							document.getElementById("remove").submit();
						}
					</script>
				<?php
				echo "</tr>";
			}
			echo "<table>";
}
	?>
</body>
</html>
