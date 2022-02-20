 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <?php 
 include 'db.php';
   if (isset($_POST['submit'])) {

   		$uid=uniqid();
   	 $user=$_POST['f1'];
   	 $pwd=$_POST['f2'];



   	$sql="insert into registration(uid,username,userpassword) values('$uid','$user', '$pwd')";

   	$run= mysql_query($sql);


   	if ($run) {

   		echo "Record has been inserted";
   		# code...
   	}

   	else
   		{echo "something is wrong";}
   	# code...
   }




 ?>



</body>
</html> 