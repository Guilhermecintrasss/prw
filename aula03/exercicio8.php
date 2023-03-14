<?php 

$linha = readline();
$val = explode(" ", $linha);

if (($val[0] < $val[1] + $val[2]) and ($val[1] < $val[0] + $val[2]) and
($val[2] < $val[0] + $val[1])){ 
    $per = number_format($val[0] + $val[1] + $val[2],1,".","");
    echo "Perimetro = $per\n";
}
else {
    $area = number_format((($val[0] + $val[1]) * $val[2])/2,1,".","");
    echo "Area = $area\n";
}



?>