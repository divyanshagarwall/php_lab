<?php
$num1 = 5;
$num2 = 10;
$num3 = 15;
$num4 = 20;

$larger = ($num1 > $num2 && $num1 > $num3 && $num1 > $num4) ? 
    $num1 : (($num2 > $num3 && $num2 > $num4) ? 
        $num2 : ($num3 > $num4 ? $num3 : $num4));


echo "Largest number among " . $num1 . ", " . $num2 . ", " . $num3 . " and " . $num4 . " is " . "$larger";
?>