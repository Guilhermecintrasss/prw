<?php 
$linha1 = readline();
$v = explode(" ",$linha1);

$delta = ($v[1] * $v[1])-(4*$v[0]*$v[2]);
if($delta >= 0) {
    if($v[0] > 0) {
        $x1 = (-($v[1]) + (sqrt($delta))/2*$v[0]);
        $x1 = (-($v[1]) - (sqrt($delta))/2*$v[0]);
    }
    
}

?>