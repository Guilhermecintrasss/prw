<?php 

    $linha = "9 99999999999999999999999999999999999999999999999";//readline();
    $val = explode(" ",$linha);

    //while(true)
    {
        //$linha = readline();
        //$val = explode(" ",$linha);
        if($val[0] == "0" && $val[1] == "0")
        {
           // break;
        }
        $num = $val[1];
        $erro = $val[0];
        $i = 0;
        $numc = ""; //Declarando a string vazia        

        while ($i<strlen($num)) //strlen:conta quantas letras tem a string
        {
            if($num[$i] != $erro)
            {        
                $numc .= $num[$i];
                //$numc = $numc . $num[$i];
                //Estou somando duas strings, uma vazia com a outra
            }
            $i++;
        }
        if(intval($numc) == 0)
            echo intval($numc)."\n";
        else
            echo $numc."\n";
    }
/*
$c = 0;
while ($c<strlen($num)) {
    if ($numc[$c] == 0){
        if ($numc[$c+1] == 0) {

        } else {
            $numfi[$c] = $numc[$c];
        }
    } else {
        $numfi[$c] = $numc[$c];
    }
}
*/
?>