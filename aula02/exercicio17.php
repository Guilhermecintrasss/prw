<?php 

$temp = readline();
$velo = readline();

$dist = ($temp * $velo);
$gasto = number_format(($dist/12),3,".","");

echo "$gasto\n";
?>