<?php 

$i=0;
while($i<100) {
    $x[$i] = number_format(fgets(STDIN),1,".",""); //fgets(STDIN) le um valor do teclado
    if ($x[$i] <=10){
        echo "A[".$i."] = ".$x[$i]."\n";
    }
    $i++;
}

?>