<?php
$c = readline();
$a=0;
for($i=0;$i<$c;$i++){
    $palavra = readline();
    if (strlen($palavra) == 5) {
        echo "3\n";
    } else {
        if ($palavra[0] == 'o'){
            $a++;
        }
        if ($palavra[1] == 'n') {
            $a++;
        }
        if ($palavra[2] == 'e'){
            $a++;
        }
        if($a>=2) {
            echo "1\n";
        } else{
            echo "2\n";
        }
        $a = 0;
    }
}
?>