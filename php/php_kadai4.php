4-1
<?php
$array = ["月曜日", "火曜日", "水曜日", "木曜日", "金曜日"];
foreach($array as $week){
    echo $week;
    echo "\n";
}
?>



4-2
<?php
$color = array("red" => "赤", "blue" => "青", "yellow" => "黄", "green" => "緑", "pink" => "桃");
foreach($color as $key => $value){
    echo "$key => $value";
    echo "\n";
}
?>



4-3
//4-1の配列
<?php
$array = ["月曜日", "火曜日", "水曜日", "木曜日", "金曜日"];

$result = array_slice($array , 4);
foreach($result as $value)
echo $value;
?>


//4-2の配列 blue以降の処理を中断してループを抜ける
<?php
$color = array("red" => "赤", "blue" => "青", "yellow" => "黄", "green" => "緑", "pink" => "桃");

foreach($color as $key => $value){
    if ($key == "blue"){
        break;
    }
    echo $key. "は、". $value. "です";
}
?>



4-4
//4-1の配列
<?php
$array = ["月曜日", "火曜日", "水曜日", "木曜日", "金曜日"];

foreach ($array as $i => $value) {
    echo $i;
}
?>


//4-2の配列
<?php
$color = array("red" => "赤", "blue" => "青", "yellow" => "黄", "green" => "緑", "pink" => "桃");
$i = 0;
foreach ($color as $key => $value){
    echo $i;
    $i++;
}
?>



4-5
<?php
$array = [
    '上半期' => ['1月', '2月', '3月', '4月', '5月', '6月'],
    '下半期' => ['7月', '8月', '9月', '10月', '11月', '12月']
];

foreach ($array as $key1 => $val1){
    echo '【'.$key1.'】'."\n";
    foreach ($val1 as $key2 => $val2){
        echo $val2. "\n";
    }
}
?>