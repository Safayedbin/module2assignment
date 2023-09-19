<?php

//Task 3
echo PHP_EOL. "TASK 3" .PHP_EOL;
$a=0;
$b=1;
for($i=0; $i<10; $i++){
     if($i==0){
         echo "0 ";
         continue;}
     $temp=$a+$b;
     $a= $b;
     $b= $temp;
     echo $a." "; 
     if($a>100){
        break;}   
    }
 
