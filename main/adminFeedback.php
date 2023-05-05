<html>
<header>
<?php 
session_start();
if(!isset($_SESSION['emailID']) || $_SESSION['a'] != 'a') {
	echo "BAD Page. <a href='index.php'>Login</a> again.";
} else {
include ("adminHeader.php");
include ("fos-db-connection.php");
if(isset($_POST['id']))
	$connect->query("DELETE FROM feedback_tab WHERE sID='".$_POST['id']."'");?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
	<center>
		<h1>Feedback</h1>
	</center>
	<br><br><br><br><br><br>
	<?php
		$sql1="SELECT * FROM feedback_tab";
        $result1=$connect->query($sql1);
		echo "<center>";
		echo "<table align=center>";
        while($row1 = $result1->fetch_assoc())
		{
			echo "<tr>";
			echo "<td align=center>";
			?>
				<div class = "box" style = "width:600px;font-size:18px;" >
					<div>
						Email: <?php echo $row1['emailID']?><br>
						Phone Number: <?php echo $row1['phoneNum']?><br>
					</div>
					<div>
						<?php echo $row1['feedback']?><br>
					</div>
				</div>
				<div class = "box" style = "width: 100px;height:36px;font-size: 18px;">
					<form id="remove" method="POST" action="">
						<input type="hidden" id="id" name="id" required>
						<button type = "button" style="background-color: #ff6347;" onclick="remove(<?php echo $row1['sID'] ?>)">Remove Feedback</button>
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
