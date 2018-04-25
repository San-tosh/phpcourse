<?php
$a;$b;
$display;
function takeValue(int $x,int $y){
    $a=$x;
    $b=$y;

}
function calculate($operator){
    global $a;
    global $b;
    global $display;
    switch($operator){
    case '+':
        $display="The additions".$a+$b;
        break;
    case '-':
        $display= "The substraction".$a-$b;
        break;
    case '*':
        $display="The multiplication value=".$a*$b;
        break;
    case '%':
        $display="The reamainder".$a%$b;
        break;
    case '/':
        $display="The division".$a/$b;
        break;
    default:
        $display="Invalid operator";

}


}
function display(){
    global $display;
 echo $display;
}
takeValue(1,2);s
calculate('*');
display();
?>