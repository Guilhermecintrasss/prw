<?php

while (true) {
    $n = readline();
    if ($n == 0) {
        break;
    }
    $divisa = readline();
    $div = explode(" ",$divisa);
    $xd = $div[0];
    $yd = $div[1];
    for ($i=0;$i<$n;$i++){

        $cod = readline();
        $XY = explode(" ",$cod);
        $x = $XY[0];
        $y = $XY[1];

        if (($x == $xd) || ($y == $yd)) {
            echo "divisa\n";
        } else {
            if (($x > $xd) and ($y > $yd)){
                echo "NE\n";
            } else {
                if (($x < $xd) and ($y > $yd)) {
                    echo "NO\n";
                } else {
                    if (($x > $xd) and ($y < $yd)) {
                        echo "SE\n";
                    } else {
                        echo "SO\n";
                    }
                }
            }
        }
        
    }

}
?>