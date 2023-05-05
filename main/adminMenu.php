<html>
<header>
<?php 
session_start();
if(!isset($_SESSION['emailID']) || $_SESSION['a'] != 'a') {
	echo "BAD Page. <a href='index.php'>Login</a> again.";
} else {
	include ("adminHeader.php");
	include ("fos-db-connection.php");
	if (isset($_POST['pizzasUpload'])) {
		if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			$targetPath = "Images/" . $_FILES['userImage']['name'];
			if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetPath)) {
				$uploadedImagePath = $targetPath;
				$sql1="UPDATE pizzas_tab SET image='".$_FILES['userImage']['name']."' WHERE sID=".$_POST['id'];
				$result1=$connect->query($sql1);
			}
		}
		$sql1="UPDATE pizzas_tab SET dishName='".$_POST['dishName']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
		$sql1="UPDATE pizzas_tab SET price='".$_POST['price']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
		$sql1="UPDATE pizzas_tab SET topping1='".$_POST['topping1']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
		$sql1="UPDATE pizzas_tab SET topping2='".$_POST['topping2']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
	}
	
	if (isset($_POST['extrasUpload'])) {
		if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			$targetPath = "Images/" . $_FILES['userImage']['name'];
			if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetPath)) {
				$uploadedImagePath = $targetPath;
				$sql1="UPDATE extras_tab SET eImage='".$_FILES['userImage']['name']."' WHERE sID=".$_POST['id'];
				$result1=$connect->query($sql1);
			}
		}
		$sql1="UPDATE extras_tab SET extraName='".$_POST['extraName']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
		$sql1="UPDATE extras_tab SET extraPrice='".$_POST['extraPrice']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
	}
?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="scripts.js"></script>
	</header>

	<body class = "mainBody">
	<center>
		<h1>Change Menu</h1>
	</center>
	<br><br><br><br><br><br>
	<?php
			$sql2="SELECT * FROM pizzas_tab";
			$result2=$connect->query($sql2);
			echo "<center>";
			echo "<table align=center>";
			while($row2 = $result2->fetch_assoc())
			{
				echo "<tr>";
				echo "<td align  = center>";
				$imagePath = "Images/" .$row2['image'];
				?>
				<form id="uploadForm" action="" method="post" enctype="multipart/form-data">
					<div class = "box" style = "width: 550px;font-size: 18px;" >
						<div>
							<input name="userImage" id="userImage" type="file" class="inputFile"><br><br>
							<img src="<?php echo $imagePath; ?>" id="cropbox" class="img" /><br />
							<?php echo $row2['image'] ?>
						</div>
						<div>
							Name: <input type="text" style="width:200px;height:25px" name="dishName" value="<?php echo $row2['dishName']?>"/><br>
							Price: <input type="text" style="width:200px;height:25px" name="price" value="<?php echo $row2['price']?>"/><br>
							Topping 1: <input type="text" style="width:200px;height:25px" name="topping1" value="<?php echo $row2['topping1']?>"/><br>
							Topping 2: <input type="text" style="width:200px;height:25px" name="topping2" value="<?php echo $row2['topping2']?>"/><br>
							<input type="hidden" id="id" name="id" value="<?php echo $row2['sID'] ?>" required>
						</div>
					</div>
					<div class = "box" style = "width: 100px;font-size: 18px;">
						<input type="submit" name="pizzasUpload" style="background-color:#ff6347;" value="Apply Changes"/>
					</div>
				</form>
				<?php
				echo "</tr>";
			}
			
			$sql2="SELECT * FROM extras_tab";
			$result2=$connect->query($sql2);
			while($row2 = $result2->fetch_assoc())
			{
				echo "<tr>";
				echo "<td align  = center>";
				$imagePath = "Images/" .$row2['eImage'];
				?>
				<form id="uploadForm" action="" method="post" enctype="multipart/form-data">
					<div class = "box" style = "width: 550px;font-size: 18px;" >
						<div>
							<input name="userImage" id="userImage" type="file" class="inputFile"><br><br>
							<img src="<?php echo $imagePath; ?>" id="cropbox" class="img" /><br />
							<?php echo $row2['eImage'] ?>
						</div>
						<div>
							Name: <input type="text" style="width:200px;height:25px" name="extraName" value="<?php echo $row2['extraName']?>"/><br>
							Price: <input type="text" style="width:200px;height:25px" name="extraPrice" value="<?php echo $row2['extraPrice']?>"/><br>
							<input type="hidden" id="id" name="id" value="<?php echo $row2['sID'] ?>" required>
						</div>
					</div>
					<div class = "box" style = "width: 100px;font-size: 18px;">
						<input type="submit" name="extrasUpload" style="background-color:#ff6347;" value="Apply Changes"/>
					</div>
				</form>
				<?php
				echo "</tr>";
			}
			echo "</table>";
}
	?>
</body>
</html>
