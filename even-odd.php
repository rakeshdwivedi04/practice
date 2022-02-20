 <!DOCTYPE html>
<html>
<title>Calculator</title>
<body>
 <form method="Post">
 <input type="text" name="f1" /><br /><br />

 <input type="submit" name="submit"  value="submit" />
 
   </form >
<?php



if (isset($_POST["submit"])) {
  $a=$_POST['f1'];
  if ($a%2==0) {

    echo "Number is Even";
    
  }
else
{

  echo "Number is odd";
}

}
 


 ?>


</body>
</html> 