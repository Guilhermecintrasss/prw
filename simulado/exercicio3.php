<?php

$x = readline();
$i = 0;
$tot_saque = 0;
$tot_bloqe = 0;
$tot_ataqu = 0;
$ace_saque = 0;
$ace_bloqe = 0;
$ace_ataqu = 0;
while($i < $x) {
    $nome = readline();
    $linha1 = readline();
    $v1 = explode(" ",$linha1);
    $linha2 = readline();
    $v2 = explode(" ",$linha2);
    
    $tot_saque += $v1[0];
    $tot_bloqe += $v1[1];
    $tot_ataqu += $v1[2];

    $ace_saque += $v2[0];
    $ace_bloqe += $v2[1];
    $ace_ataqu += $v2[2];

    $i++;
}

$pts = number_format($ace_saque/$tot_saque*100,2,".","");
$ptb = number_format($ace_bloqe/$tot_bloqe*100,2,".","");
$pta = number_format($ace_ataqu/$tot_ataqu*100,2,".","");

echo "Pontos de Saque: $pts %.\n";
echo "Pontos de Bloqueio: $ptb %.\n";
echo "Pontos de Ataque: $pta %.\n";

?>