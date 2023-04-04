<?php

$alunos = array("Murilo","Cássio","Ricardo","joao");
print_r($alunos); //imprime todos os elementos do vetor
echo "
";
echo "Qauntidade de elementos :".count($alunos)."
";
echo "

";
sort($alunos); //ordena vetor de froma crecente
//rsort() é em ordem decrescente
for ($x = 0; $x < count($alunos); $x++)
{
echo "Alunos na posição $x: ".$alunos[$x]."
";
echo "quantidade de caracters: ".strlen($alunos[$x])."
";
echo "
";
}

$indice = array_search("Murilo", $alunos); // prucura um elemento
if ($indice === false)
echo "Elemento não encontrado!
";
else
echo "Elemento encontrado!
";



?>