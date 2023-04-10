<?php 

//$frase = readline();

while($frase = readline()){
  $i=0;
  $c=0;
while($i<strlen($frase)){
  
  
    if($frase[$i] == " ") {
    $c++;
    } else {
        if(($i+$c)%2==0) {
        $frase[($i)]=strtoupper($frase[($i)]);
        } else {
            $frase[($i)]=strtolower($frase[($i)]);
        }
        
    }
    $i++;
    
}
echo "$frase\n";
  
}



?>