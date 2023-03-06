<?php 
$linha1 = (readline());
$linha2 = (readline());
$x = explode(" ",$linha1);
$y = explode(" ",$linha2);

$totalf = number_format(sqrt(($y[1] - $x[1]) * ($y[1] - $x[1]) + 
($x[0] - $y[0]) * ($x[0] - $y[0])),4,".","");
echo "$totalf\n";
?>