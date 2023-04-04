<?php
$x = readline();
$i = 0;
$c = 0;

while($i < $x) {
    $linha = readline();
    $val = explode(" ",$linha);
    $va1 = $val[0];
    $val1 = strrev($va1);
    $va2 = $val[1];
    $val2 = strrev($va2);

    if($val1[0] == $val2[0]){
        while($val1[$i] == $val2[$i]){
            $c++;
        }
    }
    $i++;
    }
    if ($c == strlen($val2)){
        echo "encaixa\n";
    } else {
        echo "nao encaixa\n";
    }

?>