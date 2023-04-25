<?php
$n = $_POST['nimg'];
$pasta = $_POST['pasta'];


for($i=1;$i<=$n;$i++){
    echo "<img src='../../../../$pasta/$i.jpg' width='150'
    height='100'><br><br>";
}


?>