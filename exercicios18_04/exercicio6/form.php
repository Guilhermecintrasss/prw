<?php 

$n1 = $_POST['no1'];
$n2 = $_POST['no2'];
$fe = $_POST['fe'];

$m = ($n1+$n2)/2;
if($m<5){
    echo "Reprova por nota";
} else {
    if ($fe < 75){
        echo "Reprova por Frequência";
    } else{
        echo "Aprovado";
    }
    }
?>