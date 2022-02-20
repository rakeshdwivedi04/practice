 <!DOCTYPE html>
<html>
<title>Basic tags</title>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>
<?php
 echo "Hello world";




 ?>
<br>
 <?php

  echo "New worksheet";
  //one line comment
  /*Multi line comment
  ------------------
  -------------


  */


  ?>


  <br>
  <?php

  $first = "This is join test";
  $second = " second line";

  $third = $first;
  $third .= $second;

  echo $third;




  ?>
  <br>
  Uppercase : <?php echo strtoupper($third); ?><br>
  Lowerrcase : <?php echo strtolower($third); ?><br>
  Uppercase First : <?php echo ucfirst($third); ?><br>
  Uppercase Words : <?php echo ucwords($third); ?>


</body>
</html> 