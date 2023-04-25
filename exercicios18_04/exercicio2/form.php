<?php
$ida = $_POST['idade'];
$av = $_POST['av'];
$livro = $_POST['livro'];
$ge = $_POST['genero'];
$op = $_POST['opniao'];

if($ida=18){
    echo "<h1>A avaliação do Livro $livro, do genero $ge,+18, foi feita</h1><br>";
} else {
    echo "<h1>A avaliação do Livro $livro, do genero $ge,livre para todas as idades, foi feita</h1>";
}
    echo "<h2>Avaliação: $av</h2>";
    echo "$op";
?>