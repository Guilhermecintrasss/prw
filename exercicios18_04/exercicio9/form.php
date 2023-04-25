<?php 
$hr = $_POST['hr'];
$nome = $_POST['nome'];
if(12>intval(substr($hr,0,2))){
    echo "<h1>Bom dia.$nome</h1>";

} else{
    if(18>intval(substr($hr,0,2))){
        echo "<h1>Boa tarde,$nome</h1>";
    } else{
        echo "<h1>Boa noite,$nome</h1>";
    }
}

?>