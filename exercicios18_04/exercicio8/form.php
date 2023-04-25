<?php

$op = $_POST['num'];

echo "<h1>A tabuada do numero escolhido($op) é:</h1>";
for($i=1;$i<=10;$i++){
    $n = $op*$i;
    echo "<h3>| $i x $op = $n |</h3>"; 
}

?>