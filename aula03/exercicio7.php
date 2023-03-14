<?php

$linha = readline();
$val = explode(" ",$linha);
$valantes = $val;
if ($val[0] > $val[1]) {
    $x = $val[0];
    $val[0] = $val[1];
    $val [1] = $x;
} 
if ($val[1] > $val[2]) {
    $x = $val[1];
    $val[1] = $val[2];
    $val [2] = $x;
}
if ($val[0] > $val[2]) {
    $x = $val[2];
    $val[2] = $val[0];
    $val [0] = $x;
} 
if ($val[0] > $val[1]) {
    $x = $val[0];
    $val[0] = $val[1];
    $val [1] = $x;
}


echo "$val[0]\n$val[1]\n$val[2]\n\n";
echo "$valantes[0]\n$valantes[1]\n$valantes[2]\n";

?>