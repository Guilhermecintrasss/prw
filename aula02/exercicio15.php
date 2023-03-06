<?php 
$linha1 = ("1.0 7.0");
$linha2 = ("5.0 9.0");
$x = explode(" ",$linha1);
$y = explode(" ",$linha2);

$total = (($y[1] - $x[0]) * ($y[1] - $x[0]) + 
($x[1] - $y[0]) * ($x[1] - $y[0]));

$totalf = numberformat(sqrt(float $total): float,4,".","");
echo "$totalf";
?>