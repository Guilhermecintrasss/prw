<?php
$v=0;
for ($i=0;$i<6;$i++) {
    $x = readline();
    if($x>0){
        $v+=1;
        $val += $x;
    }
}
echo "$v valores positivos\n";
$m=number_format($val/$v,1,".","");
echo "$m\n";
?>