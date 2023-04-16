<?php

function linearsearch($numbers,$value){
 $l=0;
 $result=false;
 while($l<count($numbers)){
     if($numbers[$l]==$value){
         echo "$numbers[$l] is true\n";
         $result=true;
         break;
     }
     $l++;
 }
 if(!$result){
     echo "$value not found";
 }
}

?>