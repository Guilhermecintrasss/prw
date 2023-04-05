<?php
$v = readline();
$x = $v;
for($i=0;$i<1000;$i++) {
    $x--;
   $n[$i] = $x;
   echo "N[$i] = $x\n";
   if ($x == 0) {
    $x = $v;
   }
}
?>