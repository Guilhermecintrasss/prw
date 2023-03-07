<?php 

$linha1 = readline();
$v = explode(" ",$linha1);

if (($v[1] > $v[2]) & ($v[3] > $v[0]) & ($v[2] + $v[3] > $v[0] + $v[1])
& ($v[2] > 0) & ($v[3] > 0) &  (($v[0]%2) == 0)){
        echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}

?>