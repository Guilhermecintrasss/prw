<?php 
$linha1 = readline();
$v = explode(" ",$linha1);

$delta = ($v[1] * $v[1])-(4*$v[0]*$v[2]);
if(($delta >= 0) and ($v[0] > 0)) {
        $x1 = number_format(((($v[1]*-1) + (sqrt($delta)))/(2*$v[0])),5,".","");
        $x2 = number_format(((($v[1]*-1) - (sqrt($delta)))/(2*$v[0])),5,".","");
      
        echo "R1 = $x1\n";
        echo "R2 = $x2\n";

    }
    else {
        echo "Impossivel calcular\n";
    }


    

?>