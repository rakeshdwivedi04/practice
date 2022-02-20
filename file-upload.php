 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <form method="Post" enctype="multipart/form-data">
 <input type="file" name="pop" /><br /><br />
 <input type="submit" name="submit" value="upload">
 
   </form >
<?php

if (isset($_POST['submit'])) {

	$name=$_FILES['pop']['name'];
	$temp_name=$_FILES['pop']['tmp_name'];

	$target = "images/";

	$a= move_uploaded_file($temp_name, $target.$name);


	if ($a) {

		echo "Selected file uploaded";
		# code...
	}
	else
	{

		echo "Something is wrong";
	# code...
	}
}






 		
 ?>


</body>
</html> 