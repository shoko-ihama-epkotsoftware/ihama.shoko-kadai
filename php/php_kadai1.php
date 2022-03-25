1-1
<?php
if ( strcasecmp("1st", "1st") == 0 ) {
    echo "同じ文字列です\n";
} else {
    echo "異なる文字列です\n";
}
?>



1-2
<?php
$last_name = "Yamada";
$first_name = "Taro";

echo $last_name . $first_name;
?>



1-3
<?php
$x = "こんにちは";
$y = 1;
$z = $x . $y;

echo $z;
?>



1-4
<?php
define("PHP", "ただいま勉強中");

echo PHP;
?>


<?php
const NAME = 'yamada';

echo NAME;
?>



1-5
<?php
echo "現在の行は、 「".__LINE__."」 行目です。\n";
echo "現在のファイル名は、「".__FILE__."」 です。";
?>



1-6
<?php
$a = 300;
$div = $a / 365;

echo $div;
?>



1-7
<?php
$i = 5;
$x = $i++;

echo $x;
?>



1-8
<?php
$i = 10;
$x = $i--;

echo $x;
?>



1-9
<?php
$i = 1;

echo $i. "\n";
echo $i++."\n";
echo $i."\n";
echo ++$i."\n";
echo $i;
?>



1-10
<?php
$a = 3;
$b = 2;

echo $a + $b;
?>



1-11
<?php
$str = 1234;

var_dump(strval(1234));
?>



1-12
<?php
$locations = 3;
$c = $locations + 2;

print($c);
?>



