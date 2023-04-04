
<?php 

$i=0;
$c=0;
$f=0;
$x= intval(readline());
while($i < $x) {

    $num[$i] = intval(fgets(STDIN));
    while ($num[$i] != ($c-1)) {

        if ($c == 0){
           $fibo[$c] = 0; 
        } else {
            if ($c == 1) {
                $fibo[$c] = 1;
            } else{
                $fibo[$c] = $fibo[$c-1] + $fibo[$c-2];
            }
        }
        $c++;
    }
    
    echo "Fib(".$num[$i].") = ".$fibo[$c];

    $i++;
}

?>