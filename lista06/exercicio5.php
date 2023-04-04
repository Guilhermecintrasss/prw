<?php  
    $fib[0]=0;
    $fib[1]=1;
    for($i=2;$i <= 60; $i++ ){
        $fib[$i] =$fib[$i-2]   + $fib[$i -1];
    }
    $i=0;
    $x= intval(readline());
    while($i < $x) {
        $num = intval(trim(fgets(STDIN)));
        echo "Fib(".$num.") = ".$fib[$num]."\n";
        $i++;
    }
?>