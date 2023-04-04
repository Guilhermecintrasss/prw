<?php

$x = readline();
$i = 0;
$pts = 0;
$ptb = 0;
$pta = 0;
while($i < $x) {
    $nome = readline();
    $linha1 = readline();
    $v1 = explode(" ",$linha1);
    $linha2 = readline();
    $v2 = explode(" ",$linha2);
    
    $ps = ($v2[0]/$v1[0]);
    $pb = ($v2[1]/$v1[1]);
    $pa = ($v2[2]/$v1[2]);
    $pts = $ps + $pts;
    $ptb = $pb + $ptb;
    $pta = $pa + $pta;
    $i++;
}

$pts = number_format(($pts/$x)*100,2,".","");
$ptb = number_format(($ptb/$x)*100,2,".","");
$pta = number_format(($pta/$x)*100,2,".","");

echo "Pontos de Saque: $pts\n";
echo "Pontos de Bloqueio: $ptb\n";
echo "Pontos de Ataque: $pta\n";

?>