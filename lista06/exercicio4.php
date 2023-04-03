<?php 
    $i=0;
    while($i<20) {
        $x[$i] = intval(fgets(STDIN)); //fgets(STDIN) le um valor do teclado
        $i++;
    }
    $x = array_reverse($x);
    $c=0;
    while($c < 20) {
        echo "N[$c] = ".$x[$c]."\n";
        $c++;
    }
?>