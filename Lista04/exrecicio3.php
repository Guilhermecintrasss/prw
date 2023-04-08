<?php
$linha = readline();
$v = explode(" ",$linha);
$a = $v[0];
$n = $v[1];
$i=0;
$sm = 0;
if($n <=0) {
    $n = readline();
} else {
    while (($i>=0) and ($i<=($n-1))) {
        $sm += $a + $i;
        $i++;
    }
}
echo "$sm";

?>