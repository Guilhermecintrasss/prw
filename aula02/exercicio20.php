<?php 
$valor = readline();

$ano = 0;
$mes = 0;
$dia = 0;

while ($valor >= 365) {
    $valor = $valor - 365;
    $ano = $ano + 1;
}
while ($valor >= 30) {
    $valor = $valor - 30;
    $mes = $mes + 1;
}
while ($valor > 0) {
    $valor = $valor - 1;
    $dia = $dia + 1;
}
	

echo "$ano ano(s)\n";
echo "$mes mes(es)\n";
echo "$dia dia(s)\n";

?>