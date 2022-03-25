3-1
<?php
$num = rand(1, 3);

if ($num == 3) {
    echo $num . " -> ";
    echo "変数の値は、3です。";
}   else {
    echo $num . " -> ";
    echo "変数の値は、3ではありません。";
}   
?>



3-2
<?php
$num = rand(1, 3);
$result = ($num === 1) ? '1です' : '1ではありません';

echo $result;
?>



3-3
<?php
$str = mt_rand(1, 4);
switch ( $str ){
    case 1:
        echo "spring";
        break;
    case 2:
        echo "summer";
        break;
    case 3:
        echo "autumn";
        break;
    case 4:
        echo "winter";
}
?>



3-4
<?php
$str = mt_rand(1, 4);
switch ( $str ){
    case 1:
        var_dump("spring") ;
    case 2:
        var_dump("summer") ;
    case 3:
        var_dump("autumn") ;
    case 4:
        var_dump("winter") ;
}
?>



3-5
<?php
$str = mt_rand(1, 6);
switch ( $str ){
    case 1:
        echo "spring";
        break;
    case 2:
        echo "summer";
        break;
    case 3:
        echo "autumn";
        break;
    case 4:
        echo "winter";
        break;
    default;
        echo "エラーです";
}
?>



3-6
<?php
$str = mt_rand(1, 4);
switch ( $str ) :
    case 1:
        echo "spring";
        break;
    case 2:
        echo "summer";
        break;
    case 3:
        echo "autumn";
        break;
    case 4:
        echo "winter";
        break;
    endswitch;
?>



3-7
<?php
$count = 1;

while ($count <= 10){
    echo $count. "回目のループ";
    echo "\n";
    $count++;
}
?>



3-8
<?php
$count = 1;

do {
    echo $count++ . "回目のループ";
    echo "\n";
}   while ($count <= 10);
?>



3-9
<?php
for($counter = -3; $counter < 10; $counter++){
    if($counter == 0){
        break;
}
echo 100/$counter. "\n";
}
?>



3-10
<?php
for($counter = -3; $counter < 10; $counter++){
    if($counter == 0){
        continue;
}
var_dump(100/$counter. "\n");
}
?>


