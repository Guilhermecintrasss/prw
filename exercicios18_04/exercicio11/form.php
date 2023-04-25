<?php 
$pro = $_POST['pro'];
$n = $_POST['nome'];
$id = $_POST['idade'];
$p = $_POST['periodo'];
$mo = $_POST['modulo'];

if($pro == 0){
 echo "<h2 style='color:red'>Prontuario em branco</h2>";
}
if($n == 0){
    echo "<h2 style='color:red'>Nome em branco</h2>";
}
if(($id<15) || ($id>75)){
    echo "<h2 style='color:red'>Idade incorreta</h2>";
}
if($p == 0){
    echo "<h2 style='color:red'>Não inseriu valor do periodo</h2>";
}
if($mo == 0){
    echo "<h2 style='color:red'>Modulo incorreto</h2>";
}


?>