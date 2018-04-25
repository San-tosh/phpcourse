<?php

//function with return type and parameter
function add($a,$b){
    return $a+$b;
}


echo add(1,2);

//function with no return type and no parameter
function display(){
    echo "hello";
}
display();
//default function type
//from php 7 we can define the scalar hints i.e data type for age
echo "----------<br>";
function user($name,int $age=20){
    echo $name;
    echo "<br>";
    echo $age;
}

user("santosh",20);