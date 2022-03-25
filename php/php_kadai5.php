<?php

include ("php_kadai5_function.php");

//関数課題1
$num1 = getSum(11, 4);
echo "sum = $num1<br>\n";
$num1 = getSub(11, 4);
echo "sub = $num1<br>\n";
$num1 = getMul(11, 4);
echo "mul = $num1<br>\n";
$num1 = getDiv(11, 4);
echo "div = $num1<br>\n";


//関数課題2
$a = 11;
$b = 4;
sumget($a, $b);
echo "sum = ".sumget($a, $b)."<br>\n";
subget($a, $b);
echo "sub = ".subget($a, $b)."<br>\n";
mulget($a, $b);
echo "mul = ".mulget($a, $b)."<br>\n";
divget($a, $b);
echo "div = ".divget($a, $b)."<br>\n";

?>