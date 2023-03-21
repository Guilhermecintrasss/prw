<?php 

$str = "  IFSP Birigui  ";

echo "Tamanho : ".strlen($str)."\n";

$str = trim($str); //Remove os espaços no inicio e no final
//muito usado em formularios que nao querem armazenar espaços.

echo "Tamanho : ".strlen($str)."\n";
?>