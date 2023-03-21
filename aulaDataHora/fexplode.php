<?php 

$data = date('d/m/Y');
echo $data."<br>";
$d = explode('/',$data);

echo "Dia: ".$d[0]."<br>";
echo "Mes: ".$d[1]."<br>";
echo "Ano: ".$d[2]."<br>";

$str = "IFSP Campus Birigui";
$pala = explode(" ",$str);
$i = 0;
while ($i<count($pala)) {
    $i2 = $i;
    $i2++;
    echo "palavra $i: $pala[$i]"."<br>";
    $i++;
}

?>