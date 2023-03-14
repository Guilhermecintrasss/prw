<?php 

$linha = readline();
$val = explode(" ",$linha);

if ($val[0] < $val[1]) {
    $x = $val[0];
    $val[0] = $val[1];
    $val [1] = $x; 
} 
if ($val[1] < $val[2]) {
    $x = $val[1];
    $val[1] = $val[2];
    $val [2] = $x;
}
if ($val[0] < $val[2]) {
    $x = $val[2];
    $val[2] = $val[0];
    $val [0] = $x;
} 
if ($val[0] < $val[1]) {
    $x = $val[0];
    $val[0] = $val[1];
    $val [1] = $x;
}

if ($val[0] >= $val[1] + $val[2]) {
 echo "NAO FORMA TRIANGULO\n";
} else {
if ($val[0] * $val[0] == ($val[1] * $val[1]) + ($val[2] * $val[2])) {
 echo "TRIANGULO RETANGULO\n";
}
if ($val[0] * $val[0] > ($val[1] * $val[1]) + ($val[2] * $val[2])) {
    echo "TRIANGULO OBTUSANGULO\n";
}
if ($val[0] * $val[0] < ($val[1] * $val[1]) + ($val[2] * $val[2])) {
    echo "TRIANGULO ACUTANGULO\n";
}
if (($val[0] == $val[1]) and
 ($val[1] == $val[2]) and
 ($val[0] == $val[2])) {
    echo "TRIANGULO EQUILATERO\n";
}
if ((($val[0] == $val[1]) and ($val[0] != $val[2])) || 
(($val[1] == $val[2]) and ($val[1] != $val[0])) || (($val[0] == $val[2]) and ($val[2] != $val[1]))) {
    echo "TRIANGULO ISOSCELES\n";
} }


?>