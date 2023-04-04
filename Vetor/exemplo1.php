<?php

$alunos = array("Murilo","Cássio","Ricardo","joao");
print_r($alunos); //imprime todos os elementos do vetor
echo "
";

//uset remove elementos de uma determinada posição
unset($alunos[1]);
print_r($alunos);
echo "
";

// array values reestabele os indices
$alunos = array_values($alunos);
print_r($alunos);
echo "
";


?>