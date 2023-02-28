<?php

$vs1 = readline();
$v1 = explode(" ",$vs1);

$vs2 = readline();
$v2 = explode(" ",$vs2);


$vtt = number_format( ($v1[1]*$v1[2]) + ($v2[1]*$v2[2]),2,".","");

echo "VALOR A PAGAR: R$ $vtt\n";



?>