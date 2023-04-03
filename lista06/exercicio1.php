<?php 
$i=0;
while($i<10) {
    $x[$i] = intval(fgets(STDIN)); //
    if ($x[$i] <= 0){
        $x[$i] = 1;
    }
    echo "X[".$i."] = ".$x[$i]."\n";
    $i++;
}

?>