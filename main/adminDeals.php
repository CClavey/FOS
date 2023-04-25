<html>
<header>
<?php 
session_start();
if(!isset($_SESSION['emailID']) || $_SESSION['emailID'] != "fos.admin@gmail.com") {
	echo "BAD Page. <a href='index.php'>Login</a> again.";
} else {
	include ("adminHeader.php");
	include ("fos-db-connection.php");
	if (! empty($_POST["upload"])) {
		if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			$targetPath = "Images/" . $_FILES['userImage']['name'];
			if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetPath)) {
				$uploadedImagePath = $targetPath;
			}
		}
	}
?>
<script type="text/javascript">
$(document).ready(function(){
    var size;
    $('#cropbox').Jcrop({
      aspectRatio: 1,
      onSelect: function(c){
       size = {x:c.x,y:c.y,w:c.w,h:c.h};
       $("#crop").css("visibility", "visible");     
      }
    });
 
    $("#crop").click(function(){
        var img = $("#cropbox").attr('src');
        $("#cropped_img").show();
        $("#cropped_img").attr('src','image-crop.php?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
    });
});
</script>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="scripts.js"></script>
	</header>

	<body class = "mainBody">
	<center>
		<h1>Change Deals</h1>
	</center>
	<br><br><br><br><br><br>
	<?php
			$sql1="SELECT * FROM deals_tab";
			$result1=$connect->query($sql1);
			echo "<center>";
			echo "<table align=center>";
			while($row1 = $result1->fetch_assoc())
			{
				echo "<tr>";
				echo "<td align  = center>";
				$imagePath = "Images/" .$row1['dImage'];
				?>
						<div class = "box" style = "width: 600px;font-size: 18px;" >
						<div class="bgColor">
							<form id="uploadForm" action="" method="post" enctype="multipart/form-data">
								<div id="uploadFormLayer">
									<input name="userImage" id="userImage" type="file" class="inputFile"><br>
									<input type="submit" name="upload" value="Submit" class="btnSubmit">
								</div>
							</form>
						</div>
						<div>
							<img src="<?php echo $imagePath; ?>" id="cropbox" class="img" /><br />
						</div>
						<div id="btn">
							<input type='button' id="crop" value='CROP'>
						</div>
						<div>
							<img src="#" id="cropped_img" style="display: none;">
						</div>
					<form id="remove" method="POST" action="">
						Name: <input type="text" name="dealName" value="<?php echo $row1['dealName']?>"/><br>
						Price: <input type="text" name="dealPrice" value="<?php echo $row1['dealPrice']?>"/><br>
						</div>
						<div class = "box" style = "width: 300px;font-size: 18px;">
						<button type = "button" style="background-color: #ff6347;" onclick="remove(<?php echo $row1['sID'] ?>)">Apply Changes</button>
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
