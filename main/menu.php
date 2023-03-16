<html>
<header>
<?php include ("header.php") ?>
<?php include ("orderHeader.php")?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
<!<?php
		//Rough starter code for printing out the entire menu with each item being their own button
		/*$sql1="SELECT * FROM books_tab";
        $result1=$connect->query($sql1);
		$count = 1;
		$total = 1;
		echo "<center>";
		echo "<table>";
		echo "<tr>";
        while($row1 = $result1->fetch_assoc())
		{
				$row1['Book_Title'];
				$row1['Price'];
				$image_Path1 = "Images/" . $row1['Cover_Pic'];
				echo "<td align  = center>";
			?>
			<a href = "javascript:void(0)" onclick = "popupfunction(<?php echo $total ?>)" class=linktext>
			<img src="<?php echo $image_Path1;?>" height = "200px" width="150px" /><br><?php echo $row1['Book_Title']; ?>
			</a>
			<div id="popup<?php echo $total?>" class="white_content">
			<p align=center><br><br>
			<img src="<?php echo $image_Path1;?>" height = "200px" width="150px" /><br><?php echo $row1['Book_Title']; ?><br><br><?php echo $row1['Author_Name']; ?><br>$<?php echo $row1['Price']; ?><br><?php echo $row1['Publisher']; ?><br><?php echo $row1['Edition_No']; ?><br><?php echo $row1['Publication_Year']; ?><br><?php echo $row1['Description']; ?><br><br><button type="button" onclick = "addToCart('<?php echo $row1['Book_Title'], ": $", $row1['Price']; ?>')">Add to Cart!</button><br><br>
			<a href = "javascript:void(0)" onclick = "popupclose(<?php echo $total ?>)" class=linktext>Close</a>
			</p>
			</div>
			<div id="fade<?php echo $total?>" class="black_content"></div></td>
			<?php
			$count++;
			$total++;
			if($count == 6)
			{
				echo "</tr><tr>";
				$count == 1;
			}
		}
		echo "<table>";*/
	?>>
</body>
</html>