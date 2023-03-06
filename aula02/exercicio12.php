<?php 
$linha = (readline());
$val = explode(" ",$linha);

$tri = number_format(($val[0]*$val[2])/2,3,".","");
$cir = number_format(($val[2] * $val[2] * 3.14159),3,".","");
$trap = number_format((($val[0]+$val[1])*$val[2])/2,3,".","");
$qua = number_format($val[1] * $val[1],3,".","");
$ret = number_format($val[0] * $val[1],3,".","");


	
echo "TRIANGULO: $tri\n";
echo "CIRCULO: $cir\n";
echo "TRAPEZIO: $trap\n";
echo "QUADRADO: $qua\n";
echo "RETANGULO: $ret\n";

?>