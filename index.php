<?php
include ('dbconfig.php');
if(isset($_POST['submit']))

{

	$name =$_POST['name'];
	$img =$_FILES['image']['name'];
	$targetfile = "picture/" . basename($img);
	$imagefiletype = strtolower(
		pathinfo($targetfile, PATHINFO_EXTENSION)
	);
	$insert = "insert into images values ('NULL','$name','$img')";
	if(mysql_query($insert))
	{
		move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);	
		echo "<script>alert('image has been uploaded to folder')</script>";
	}
	else{
		 echo "<script>alert('image does not upload to folder')</script>";
	}
}

?>

<html>
<body> 

	<head>

		<title>image upload into folder using PHP</title>
	</head>		

<form action ="index.php" method ="post" enctype ="multipart/form-data">
<label>Name</label>
<input type="text" name="name">
<br>
<label>Select Image To Upload</label>
<input type="file" name="image" id='image'>

<input type="submit" name="submit" value="Upload The Picture">


</form>	

</body>
</html>