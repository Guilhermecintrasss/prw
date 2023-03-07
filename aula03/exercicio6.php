<?php 
$linha = readline();
$xy = explode(" ",$linha);
$x = floatval($xy[0]);
$y = floatval($xy[1]);

 if (($x == 0) && ($y != 0)) {
   echo "Eixo Y\n";
} else if (($x != 0 ) && ($y == 0)) {
    echo "Eixo X\n";
} else if (($x > 0 ) && ($y > 0)) {
    echo "Q1\n";
} else if (($x < 0 ) && ($y > 0)) {
    echo "Q2\n";
} else if (($x < 0 ) && ($y < 0)) {
    echo "Q3\n";
} else if (($x > 0 ) && ($y < 0)) {
    echo "Q4\n";
} else {
    echo "Origem\n";
}
    


?>