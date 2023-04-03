<?php 
    $c=readline();
    $linha= readline();
    $x = array_map('intval', explode(' ', $linha ));
    $y = min($x);
    $p = array_search($y,$x);
    echo "Menor valor: $y\n";
    echo "Posicao: $p\n";
?>