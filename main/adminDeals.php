<html>
<header>
<?php 
session_start();
if(!isset($_SESSION['emailID']) || $_SESSION['a'] != 'a') {
	echo "BAD Page. <a href='index.php'>Login</a> again.";
} else {
	include ("adminHeader.php");
	include ("fos-db-connection.php");
	if (isset($_POST['upload'])) {
		if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			$targetPath = "Images/" . $_FILES['userImage']['name'];
			if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetPath)) {
				$uploadedImagePath = $targetPath;
				$sql1="UPDATE deals_tab SET dImage='".$_FILES['userImage']['name']."' WHERE sID=".$_POST['id'];
				$result1=$connect->query($sql1);
			}
		}
		$sql1="UPDATE deals_tab SET dealName='".$_POST['dealName']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
		$sql1="UPDATE deals_tab SET dealPrice='".$_POST['dealPrice']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
		$sql1="UPDATE deals_tab SET contents='".$_POST['contents']."' WHERE sID=".$_POST['id'];
		$result1=$connect->query($sql1);
	}
?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="scripts.js"></script>
	</header>

	<body class = "mainBody">
	<center>
		<h1>Change Deals</h1>
	</center>
	<br><br><br><br><br><br>
	<?php
			$sql2="SELECT * FROM deals_tab";
			$result2=$connect->query($sql2);
			echo "<center>";
			echo "<table align=center>";
			while($row2 = $result2->fetch_assoc())
			{
				echo "<tr>";
				echo "<td align  = center>";
				$imagePath = "Images/" .$row2['dImage'];
				?>
				<form id="uploadForm" action="" method="post" enctype="multipart/form-data">
					<div class = "box" style = "width: 550px;font-size: 18px;" >
						<div>
							<input name="userImage" id="userImage" type="file" class="inputFile"><br><br>
							<img src="<?php echo $imagePath; ?>" id="cropbox" class="img" /><br />
							<?php echo $row2['dImage'] ?>
						</div>
						<div>
							Name: <input type="text" style="width:200px;height:25px" name="dealName" value="<?php echo $row2['dealName']?>"/><br>
							Price: <input type="text" style="width:200px;height:25px" name="dealPrice" value="<?php echo $row2['dealPrice']?>"/><br>
							Contents: <input type="text" style="width:200px;height:25px" name="contents" value="<?php echo $row2['contents']?>"/><br>
							<input type="hidden" id="id" name="id" value="<?php echo $row2['sID'] ?>" required>
						</div>
					</div>
					<div class = "box" style = "width: 100px;font-size: 18px;">
						<input type="submit" name="upload" style="background-color:#ff6347;" value="Apply Changes"/>
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
