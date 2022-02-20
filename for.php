 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <form method="Post">
 <input type="text" name="f1" /><br /><br />
 <input type="submit" name="submit" value="find">
 
   </form >
<?php

$a = $_POST["f1"];

for($i=1; $i <= 10 ; $i++) 
{ 
	 $c=$a*$i;
	 echo $a."X".$i."=".$c;
	 echo "<br>";
}



 ?>


</body>
</html> 