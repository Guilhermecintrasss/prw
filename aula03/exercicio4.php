<?php 
$linha1 = readline();
$cod = explode(" ",$linha1);

switch ($cod[0]) {
    case 1:
        $val = 4;
        break;
    case 2:
        $val = 4.50;
        break;
    case 3:
        $val = 5;
        break;
    case 4:
        $val = 2.00;
        break;
    case 5:
        $val = 1.50;
        break;
}
$tot = number_format(($val * $cod[1]),2,".","");
echo "Total: R$ $tot\n";

?>