<?php 

$data = date('d/m/Y');

$dia = substr($data,0,2);
echo "Dia: ".$dia."<br>";
// Implementar Mes e ano
$mes = substr($data,3,2);
$ano = substr($data,6,4);
echo "Mês: ".$mes."<br>";
echo "Ano: ".$ano."<br>";


?>