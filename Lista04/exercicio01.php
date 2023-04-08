<?php 
$linha = readline();
$num = explode(" ",$linha);
$X =  $num[0];
$Y = $num[1];
$n = 0;
if ((1<$X) and ($X<20)){

while ($n < $Y) {
  $n = $n+1;
  
  if ($n == $Y){ 
  echo "$n\n";
} else {
  if (($n%$X) === 0) {
    echo "$n";
  }else{ 
    echo "$n ";
  }
}
  if (($n%$X) === 0)
  {
    echo "\n";
  }
}
}
?>