 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <form method="Post">
 <input type="text" name="first" /><br /><br />
 <input type="text" name="second" /><br /><br />
 <input type="text" name="third" /><br /><br />
 
 <input type="submit" name="submit"  value="submit" />
 
   </form >




 <?php

 if (isset($_POST["submit"])) {
$a=$_POST["first"];
$b=$_POST['second'];

if ($a>$b) {

	echo $a . "is greater than" . $b;
	# code...
}
elseif ($a<$b) {

	echo $a . "is smaller than". $b;

	# code...
}

else {


	echo $a . " is equal to " . $b;
}
}
 ?>

 <?php
 $c=$_POST['third'];

 if ($c== "Monday" || $c== "Tuesday" || $c== "Wednesday" || $c== "Thursday") {


 	echo "Welcome to week day" . $c;
 }
 	
 
  elseif($c== "Friday"){

echo "Waiting for Weekend" .$c;


 }
 Else {


 	echo "Welcome to Weekend"   . $c;

 }


 ?>


</body>
</html> 