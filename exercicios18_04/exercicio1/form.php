<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['op'];

if ($op == 'soma'){
    $r = $n1 + $n2;
    echo "<h1>Resultado: $r</h1>";
}
if ($op == 'subtrair'){
    $r = $n1 - $n2;
    echo "<h1>Resultado: $r</h1>";
}
if ($op == 'dividir'){
    $r = $n1/$n2;
    echo "<h1>Resultado: $r</h1>";
}
if ($op == 'multiplicar'){
    $r = $n1 * $n2;
    echo "<h1>Resultado: $r</h1>";
}

?>