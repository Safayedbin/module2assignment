<?php
//Task 1
echo PHP_EOL. "TASK 1" .PHP_EOL;
function iseven($start,$end,$step, $process){
    $process($start,$end,$step);
   
 }
 function forloop($s,$e,$step){
    for($i=$s; $i<=$e; $i+=$step){
        if($i%2==0) {echo $i." ";}   
    }
 }
 function whileloop($s,$e,$step){
    $i=$s;
    while($i<=$e){
        if($i%2==0) {echo $i." ";}
        $i+=$step;
      }
 }
 function dowhileloop($s,$e,$step){
    $i=$s;
    do{
    if($i%2==0) {echo $i." ";}
    $i+=$step;
    }while($i<=$e);
 }
iseven(1,20,2, "forloop");
iseven(1,20,2, "whileloop");
iseven(1,20,2, "dowhileloop");