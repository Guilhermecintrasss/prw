<?php
$m[12][12] = array();
$l = readline();
$op = readline();
$s = 0;
for($i=0;$i<12;$i++) {

    for ($c=0;$c<12;$c++){
    $coluna[$i][$c] = intval(trim(fgets(STDIN)));
    if($c == $l) {
        $s += $coluna[$i][$c];
    }
    }
}

if($op == "S") {
    $s = number_format($s,1,".","");
    echo "$s\n";
} else {
    $m = number_format($s/12,1,".","");
    echo "$m\n";
}
    


?>