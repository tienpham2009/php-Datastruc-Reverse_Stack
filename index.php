<?php
include_once "Stack.php";

$array = [1,2,3,4,5,6,7];
$newArray = [];
$stack = new Stack();
$arrayStack = $stack->show();

for ($i = 0 ; $i < count($array) ; $i++ ){
    $stack->push($array[$i]);
}

for ($i = 0 ; $i < count($array) ; $i++){
    $element = $stack->pop();
    array_push($newArray, $element);
}

var_dump($newArray);




