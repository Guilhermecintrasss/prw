<?php 
$valor = readline();
$valorexi = $valor;
$hr = 0;
$min = 0;
$seg = 0;

while ($valor >= 3600) {
    $valor = $valor - 3600;
    $hr = $hr + 1;
}
while ($valor >= 60) {
    $valor = $valor - 60;
    $min = $min + 1;
}
while ($valor > 0) {
    $valor = $valor - 1;
    $seg = $seg + 1;
}
	

echo "$hr:$min:$seg\n";

?>