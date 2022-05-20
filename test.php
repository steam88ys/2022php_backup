<?php
$arr=array();
$arr[0]="apple";
$arr[1]="melon";
$arr[2]="banana";

// for($i=0; $i<3; $i++) {
//     echo $arr[$i];
// }

foreach($arr as $element) {
    echo $element;
}

?>

<?php
// 연관배열
$array = array("apple"=> 1000, "mango"=> 2000, "grape"=> 3000);
foreach($array as $key => $value) {
    echo $key, $value;
}

?>