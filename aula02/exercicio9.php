<?php
$nome = readline();
$sal = readline();
$tv = readline();

$com = $tv*0.15;
$stotal = number_format($com + $sal,2,".","");

echo "TOTAL = R$ $stotal\n";

?>