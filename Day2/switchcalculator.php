<?php

$a=20;
$b=30;
 $operator='*';
 switch($operator){
     case '+':
         echo "The additions".$a+$b;
         break;
     case '-':
         echo "The substraction".$a-$b;
         break;
     case '*':
         echo "The multiplication value=".$a*$b;
         break;
     case '%':
         echo "The reamainder".$a%$b;
         break;
     case '/':
         echo "The division".$a/$b;
         break;
     default:
         echo "Invalid operator";

 }
 ?>