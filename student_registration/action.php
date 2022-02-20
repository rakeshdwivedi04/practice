 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <?php 
 include 'db.php';
   if (isset($_POST['submit'])) {

   		$uid=uniqid();
   	 $name=$_POST['name'];
   	 $class=$_POST['class'];
       $roll=$_POST['roll'];
       $parent=$_POST['parentname'];
       $subject=$_POST['subject'];



   	$sql="insert into registration(uid,name,class,roll,parent,subject) values('$uid','$name','$class','$roll','$parent','$subject')";

   	$run=mysqli_query($conn,$sql);


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