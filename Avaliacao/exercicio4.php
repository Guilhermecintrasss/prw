<?php
$m[5][5] = array();
$l = readline();

for($i=0;$i<5;$i++) {

    for ($c=0;$c<5;$c++){
    $linha[$i][$c] = number_format(trim(fgets(STDIN)),2,".","");
        if($linha[$i][$c] >= $l){
        echo "Valor Encontrado: ".$linha[$i][$c]." Linha: $i Coluna: $c\n";
        }
    }
}

?>