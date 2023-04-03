<?php
$x = fgets(STDIN);
$vet[0] = $x;

for ($i = 1; $i < 10; $i++)
{
$vet[$i] = $vet[$i-1] * 2;

}
for ($i = 0; $i < 10; $i++)
{
echo "N[$i] = ".$vet[$i]."\n";
}
?>