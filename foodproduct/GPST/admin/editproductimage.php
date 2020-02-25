<?php
	include('../store/connect.php');
	$id=$_GET['id'];
	$result = mysqli_query($conn,"SELECT * FROM internet_shop where id='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$image=$row['img'];
			}
?>
<img src="../store/img/products/<?php echo $image ?>">
<form action="editpicexec.php" method="post" enctype="multipart/form-data">
	<br>
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id']; ?>">
	Select Image
	<br>
	<input type="file" name="image"><br>
	<input type="submit" value="Upload">
</form>