<?php

//関数課題1

function getSum($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}

function getSub($num1, $num2){
    $sub = $num1 - $num2;
    return $sub;    
}

function getMul($num1, $num2){
    $mul = $num1 * $num2;
    return $mul;
}

function getDiv($num1 , $num2){
    $div = $num1 / $num2;
    return $div;
}



//関数課題2

function sumget(&$c, &$d){
    $c = 12;
    $d = 5;
    $sum = $c + $d;
    return $sum;
}

function subget(&$c, &$d){
    $c = 12;
    $d = 5;
    $sub = $c - $d;
    return $sub;    
}

function mulget(&$c, &$d){
    $c = 12;
    $d = 5;
    $mul = $c * $d;
    return $mul;
}

function divget(&$c, &$d){
    $c = 12;
    $d = 5;
    $div = $c / $d;
    return $div;
}
?>