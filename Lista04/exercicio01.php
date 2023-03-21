<?php 

$linha = readline();
$num = explode(" ",$linha);
$X =  $num[0];
$Y = $num[1];
$n = 0;
if ((1<$X) and ($X<20)){
if (($X < $Y) and ($Y<100000)) {



while ($n < $Y) {
  $n = $n+1;
  
  if ($n == 99){ 
  echo "$n\n";
} else {
    echo "$n ";
}
  if (($n%$X) === 0)
  {
    echo "\n";
  }
}
}
}


?>