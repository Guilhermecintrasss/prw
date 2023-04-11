<?php 

$vm = readline();
$d = readline();
$c = readline();

$t = number_format(($d/$vm),2,".","");
$litros = number_format(($d/$c),2,".","");

echo "Total horas: $t\n";
echo "Total combustivel: $litros\n";

?>