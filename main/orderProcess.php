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
		$sql1="SELECT * FROM pizzas_tab";
        $result1=$connect->query($sql1);
		$sql2="SELECT * FROM extras_tab";
        $result2=$connect->query($sql2);
		echo "<center>";
		echo "<table>";
        while($row1 = $result1->fetch_assoc())
		{
			echo "<tr>";
			$row1['dishName'];
			$row1['price'];
			$image_Path1 = "Images/" . $row1['image'];
			$topping1 = $row1['topping1'];
			$topping2 = $row1['topping2'];
			echo "<td align  = center>";
			?>
				<div class = "box" style = "width: 300px;font-size: 18px;" ><img src="<?php echo $image_Path1;?>"/><?php echo $row1['dishName'];?><br>
				<?php echo "$" . $row1['price']?><br><?php echo $row1['topping1']?><br><?php echo $row1['topping2']?>
				</div>
				</td>
				<td>
					<div class = "box"><button style="background-color: #ff6347;" name = "add" id = "add">Add Item</button></div>
				</td>
			<?php
			echo "</tr>";
		}
		while($row2 = $result2->fetch_assoc())
		{
			echo "<tr>";
			$row2['extraName'];
			$row2['extraPrice'];
			$image_Path2 = "Images/" . $row2['eImage'];
			echo "<td align  = center>";
			?>
				<div class = "box" style = "width: 300px;font-size: 18px;"><img src="<?php echo $image_Path2;?>" /><?php echo $row2['extraName'];?><br>
				<?php echo "$" . $row2['extraPrice']?>
				</div>
				</td>
				<td>
					<div class = "box"><button style="background-color: #ff6347;" name = "add" id = "add" >Add Item</button></div>
				</td>
			<?php
			echo "</tr>";
		}
		echo "<table>";
	?>
</body>
</html>