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
 if ($a%2!=0) {

 	for ($i=1; $i <= 10 ; $i++) { 
 	$c=$a*$i;
 	echo $a . "X" . $i . "=" . $c;

 	echo "<br>";

 	}
 	# code...
 }

 else
 	( 

 		if ($a<=500) {

 			for ($a=1; $a <= 500 ; $a++) { 

 				echo $a;

 	echo "<br>";

}

  else  {
	
})


 



 		}



 	)



 ?>


</body>
</html> 