<?php
$c = readline();
for($i=0;$i<$c;$i++){
    $v = readline();
    if ($v != 0) {
        if($v%2==0){
            echo "EVEN ";
        } else {
            echo "ODD ";
        }
        if($v>0) {
            echo "POSITIVE\n";
        } else {
            echo "NEGATIVE\n";
        }
    } else {
        echo "NULL\n";
    }
}

?>