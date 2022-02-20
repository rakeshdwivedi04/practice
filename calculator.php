 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <form method="Post">
 <input type="text" name="first" /><br /><br />
 <input type="text" name="second" /><br /><br />
 <input type="submit" name="add"  value="Add" />
 <input type="submit" name="subtract"  value="Subtract" />
 <input type="submit" name="multiply"  value="Multiply" />
 <input type="submit" name="divide"  value="Divide" />
   </form >
<?php

$a = $_POST["first"];
$b = $_POST["second"];

$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;

if (isset($_POST["add"])) {

 echo "the sum of two numbers is " . $c; 

}
/*
else{ 
  echo "the difference of two numbers is " . $d; 

};*/




if (isset($_POST["subtract"])) {

 echo "the difference of two numbers is " . $d; 

}




if (isset($_POST["multiply"])) {

echo "the multiple of two numbers is " . $e; 

}





if (isset($_POST["divide"])) {

  echo "the divisor of two numbers is " . $f;
}




 ?>


</body>
</html> 