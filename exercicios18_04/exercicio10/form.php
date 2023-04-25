<?php 
$p = $_POST['p'];
$m = $_POST['m'];
$g = $_POST['g'];

$vp = 10*$p;
$vm = 12*$m;
$vg = 15*$g;

$vt = $vp + $vm + $vg;
echo "<h1>Total gasto: R$$vt</h1>";
?>