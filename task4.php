<?php
//Task 4
echo PHP_EOL. "TASK 4" .PHP_EOL;
function fibonacci2($a,$b,$end){
   for($i=0; $i<$end; $i++){
    if($i==0){
        echo "0 ";
        continue;}
    $temp=$a+$b;
    $a= $b;
    $b= $temp;
    echo $a." ";    
   }
}


fibonacci2(0,1,15);