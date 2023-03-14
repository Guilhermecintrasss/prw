<?php 

$linha = readline();
$valor = explode(" ",$linha);
$v1 = intval($valor[0]);
$v2 = intval($valor[1]);

if ($v1 >= $v2) {
    if ($v1 - $v2 == 0) {
        $h = 24;
    } else{
    $h = ($v1 - $v2) - 24;    
    $h = $h*-1;
}
}
else {
    $h = $v2 - $v1;
}

echo "O JOGO DUROU $h HORA(S)\n";
?>