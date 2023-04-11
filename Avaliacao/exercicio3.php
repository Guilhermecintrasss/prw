<?php 

$n = readline();

for ($i=0;$i<$n;$i++){

    $frase = readline();
    $sep = explode(" ",$frase);

    $frasei = array_reverse($sep);
    $frasej = implode(" ",$frasei); //transforma em uma string, tendo o separador espaço
    
    for ($c=0;$c<strlen($frasej);$c++){ //contador para cada letra
        if ($frasej[$c] == "P") {
            $frasej[$c] = "B";
        }
        if ($frasej[$c] == "F") {
            $frasej[$c] = "V";
        }
        if ($frasej[$c] == "T") {
            $frasej[$c] = "D";
        }
        if ($frasej[$c] == "R") {
            $frasej[$c] = "L";
        }
        if ($frasej[$c] == "J") {
            $frasej[$c] = "Z";
        }
        if ($frasej[$c] == "X") {
            $frasej[$c] = "S";
        }
        
    }
    echo "$frasej";

}

?>
