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
  if ($a%2==0) 
  {

    echo "Number is Even";
    # code...
  }
  else
   {

    echo "Number is odd";

    $nstr = $a . "";

    $sum = 0;
    for ($i = 0; $i < strlen($nstr); ++$i)
    {
        $sum += $nstr[$i];
    }
    echo $sum;



}

}
 


 ?>


</body>
</html> 