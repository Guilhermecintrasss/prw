<?php 

$linha = readline();
$coluna = readline();

if (($linha + $coluna)%2 == 0) {
    $r = 1;
} else {
    $r = 0;
}
echo "$r\n"
?>