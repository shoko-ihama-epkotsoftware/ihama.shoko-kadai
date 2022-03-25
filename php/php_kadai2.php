2-1
<?php
$a = 2 + 4 - 5;
$b = 4 - 5 + 2;

echo $a == $b;
?>


<?php
$x = 4 * 5 / 2;
$y = 5 / 2 * 4;

echo $x == $y;
?>



2-2
<?php
$a = 2 * 3 + 4 + 1;
$b = 2 * (3 + 4 + 1);

echo $a != $b;
?>



2-3
<?php
$username = "Admin";   //""内をAdmin以外にした場合にfalseが実行される

if($username == "Admin"){
    echo ("Welcome to the admin page.");
}else{
    echo("Welcome to the user page.");
}
?>



2-4
<?php
$fruits = array("orange", "lemon", "apple", "pear", "grape");

foreach ($fruits as $value) {
    echo "$value\n";
}
?>



2-5
<?php
$fruits = array("orange", "lemon", "apple", "pear", "grape");
sort($fruits);

print_r($fruits);
?>



2-6
<?php
$array = [['日本', '岸田文雄', '男性'], 
['台湾', '蔡英文', '女性'], 
['中国', '習近平', '男性']];

foreach ($array as $vals){
    echo $vals[0]. '：'.$vals[1]. '('. $vals[2]. ')';
    echo "\n";
}
?>


<?php
$array = [['日本', '岸田文雄', '男性'],
['台湾', '蔡英文', '女性'], 
['中国', '習近平', '男性']];

while ($vals = current($array)){
echo $vals[0]. '：'.$vals[1]. '('. $vals[2]. ')';
echo "\n";
next($array);    
}
?>