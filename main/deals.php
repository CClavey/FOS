<html>
<header>
<?php include ("header.php") ?>
<?php include ("orderHeader.php")?>
<?php include ("fos-db-connection.php")?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
<?php
		$sql1="SELECT * FROM deals_tab";
        $result1=$connect->query($sql1);
		echo "<center>";
		echo "<table>";
        while($row1 = $result1->fetch_assoc())
		{
			echo "<tr>";
			$row1['dealName'];
			$row1['dealPrice'];
			$image_Path1 = "Images/" . $row1['dImage'];
			$row1['contents'];
			echo "<td align  = center>";
			?>
				<div class = "box" style = "width: 300px;font-size: 18px;" ><img src="<?php echo $image_Path1;?>" style = "width: 150px; height = 150px"/><?php echo $row1['dealName'];?><br>
				<?php echo "$" . $row1['dealPrice']?>
				</div>
				<div class = "box" style = "width: 300px;font-size: 18px;">
				<?php echo "Contents: " . $row1['contents']?>
				</div>
			<?php
			echo "</tr>";
		}
		echo "<table>";
	?>
</body>
</html>