<?php 

  $ano = $_POST['ano'];
  if ($ano%400 == 0) {
    echo "É um ano bissexto";
  } else{
        if (($ano%4 == 0) and ($ano%100 != 0)) {
            echo "É um ano bissexto";
        } else {
            echo "Não é um ano bissexto";
        }
    }
?>