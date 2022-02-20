 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <form method="Post">
 <input type="text" name="first" /><br /><br />
 <input type="text" name="second" /><br /><br />
 <input type="submit" name="submit"  value="submit" />
 
   </form >

<?php
$user_name= $_POST['first'];
if ($user_name=="") {

	echo "Write your Name";
	
}
else
echo "My Name is . $user_name";

?>
</body>
</html> 