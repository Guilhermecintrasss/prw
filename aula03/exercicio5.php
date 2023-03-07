<?php 

$linha = readline();
$n = explode(" ",$linha);
$n1 = floatval($n[0]);
$n2 = floatval($n[1]);
$n3 = floatval($n[2]);
$n4 = floatval($n[3]);
$media = (($n1*2)+($n2*3)+($n3*4)+($n4*1))/10;
$media = intval($media*10)/10;
$m = number_format($media,1,".","");
echo "Media: $m\n";
if ($m >= 7){
    echo "Aluno aprovado.\n";
}
else if ($m < 5)
{
    echo "Aluno reprovado.\n";
}
else
{
    echo "Aluno em exame.\n";
    $ex = floatval(readline());
    echo "Nota do exame: ".number_format($ex,1,".","")."\n";
    $mf = number_format(($m + $ex)/2,1,".","");
    if ($mf >= 5)
    {
        echo "Aluno aprovado.\n";
    }
    else
    {
        echo "Aluno reprovado.\n"; 
    }
    echo "Media final: $mf\n";
    $m = $mf;
}
?>