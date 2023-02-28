<?php

$linha1 = (readline());
$v = explode(" ", $linha1);

$m1 = ($v[0]+$v[1]+abs($v[0]-$v[1]))/2;

$mt = ($m1+$v[2]+abs($m1-$v[2]))/2;

echo "$mt eh o maior\n";

?>