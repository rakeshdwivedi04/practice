 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <form method="post">
 <input type="text" name="f1" /><br /><br />
 <input type="text" name="f2" /><br /><br />
 <input type="submit" name="submit"  value="Submit" />
 
   </form>



</body>
</html> 

<?php
if(isset($_POST['submit']))
{
$conn=mysqli_connect('localhost','root','','db') or die();
$uid=uniqid();
$user=$_POST['f1'];
$pwd=$_POST['f2'];
$sql="insert into registration(uid,username,userpassword)values('$uid','$user','$pwd')";
$run=mysqli_query($conn,$sql);
if($run){
	echo "record has been inserted";
}
else
{
	echo "somthign is wrong";
}



}
?>