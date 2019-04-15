<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <?php

   $nItems = $_GET["nItems"];

   $myArr = [];
   for ($i=0; $i < $nItems; $i++) {

     $randomNum = rand(1, 100);
     $myArr[] = $randomNum;
   }

   var_dump($myArr);
   echo "<br>";

   $sum = 0;
   for ($x=0; $x < $nItems; $x++) {

     $elem = $myArr[$x];
     $sum += $elem;
   }

   var_dump($sum);
   echo "<br>";

   $max = $myArr[0];
   for ($y=0; $y < $nItems; $y++) {
     
     $elem = $myArr[$y];
     if ($elem > $max) {
        $max = $elem;
     }
   }
   var_dump($max);

 ?>
  </body>
</html>
