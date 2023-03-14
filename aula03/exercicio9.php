<?php 

$linha = readline();
$v = explode(" ",$linha);

if (($v[0]%$v[1] == 0) || ($v[1]%$v[0] == 0)){
  echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
} 

?>