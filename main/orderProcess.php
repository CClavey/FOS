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
		$sql3="SELECT * FROM deals_tab";
        $result3=$connect->query($sql3);
		echo "<center>";
		echo "<table>";
		$total = 1;
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
					<a href = "javascript:void(0)" onclick = "popupfunction(<?php echo $total ?>)" class=linktext><div class = "box"><button style="background-color: #ff6347;" name = "add" id = "add">Add Item</button></div></a>
					<div id="popup<?php echo $total?>" class="white_content">
					<p align=center><br><br>
					<img src="<?php echo $image_Path1;?>" height = "200px" width="200px" /><br><?php echo $row1['dishName']; ?><br><br><?php echo "$" . $row1['price']; ?><br><?php echo $row1['topping1']; ?><br><?php echo $row1['topping2']; ?><br><br><button style="background-color: #ff6347;" type="button" onclick = "addToCart('<?php echo $row1['dishName'], ": $", $row1['price']; ?>')">Add to Cart!</button><br><br>
					<a href = "javascript:void(0)" onclick = "popupclose(<?php echo $total ?>)" class=linktext>Close</a>
					</p>
					</div>
					<div id="fade<?php echo $total?>" class="black_content"></div>
				</td>
			<?php
			$total++;
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
					<a href = "javascript:void(0)" onclick = "popupfunction(<?php echo $total ?>)" class=linktext><div class = "box"><button style="background-color: #ff6347;" name = "add" id = "add" >Add Item</button></div></a>
					<div id="popup<?php echo $total?>" class="white_content">
					<p align=center><br><br>
					<img src="<?php echo $image_Path2;?>" height = "200px" width="200px" /><br><?php echo $row2['extraName']; ?><br><br><?php echo "$" . $row2['extraPrice']; ?><br><br><button style="background-color: #ff6347;" type="button" onclick = "addToCart('<?php echo $row2['extraName'], ": $", $row2['extraPrice']; ?>')">Add to Cart!</button><br><br>
					<a href = "javascript:void(0)" onclick = "popupclose(<?php echo $total ?>)" class=linktext>Close</a>
					</p>
					</div>
					<div id="fade<?php echo $total?>" class="black_content"></div>
				</td>
			<?php
			$total++;
			echo "</tr>";
		}
		while($row3 = $result3->fetch_assoc())
		{
			echo "<tr>";
			$row3['dealName'];
			$row3['dealPrice'];
			$row3['contents'];
			$image_Path3 = "Images/" . $row3['dImage'];
			echo "<td align  = center>";
			?>
				<div class = "box" style = "width: 300px;font-size: 18px;"><img src="<?php echo $image_Path3;?>" /><?php echo $row3['dealName'];?><br>
				<?php echo "$" . $row3['dealPrice']?>
				</div>
				</td>
				<td>
					<a href = "javascript:void(0)" onclick = "popupfunction(<?php echo $total ?>)" class=linktext><div class = "box"><button style="background-color: #ff6347;" name = "add" id = "add" >Add Item</button></div></a>
					<div id="popup<?php echo $total?>" class="white_content">
					<p align=center><br><br>
					<img src="<?php echo $image_Path3;?>" height = "200px" width="250px" /><br><?php echo $row3['dealName']; ?><br><br><?php echo "$" . $row3['dealPrice']; ?><br><?php echo $row3['contents']; ?><br><br><button style="background-color: #ff6347;" type="button" onclick = "addToCart('<?php echo $row3['dealName'], ": $", $row3['dealPrice']; ?>')">Add to Cart!</button><br><br>
					<a href = "javascript:void(0)" onclick = "popupclose(<?php echo $total ?>)" class=linktext>Close</a>
					</p>
					</div>
					<div id="fade<?php echo $total?>" class="black_content"></div>
				</td>
			<?php
			echo "</tr>";
		}
		echo "<table>";
	?>
</body>
</html>