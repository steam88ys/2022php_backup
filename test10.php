<!--strlen(문자열): 문자열의 길이-->
<?php
$str="PHP is a popular language";
echo strlen($str);
echo "<br>";echo "<br>";
?>

<!-- strcmp(문자열1, 문자열2) : 문자열1과 문자열2의 비교 같으면 0, 다르면 1 리턴 -->
<?php
$str1 = "Hello php";
$str2 = "Hello PHP";
if( strcmp($str1, $str2)){
    echo("문자열이 다릅니다.");
}
else echo("문자열이 같습니다.");
echo "<br>";echo "<br>";
?>

<!-- strtolower(문자열):소문자로 변경 -->
<!-- strtoupper(문자열):대문자로 변경 -->
<?php
$str="Marry Had A Little Lamb and She LOVED It So Much";
echo strtoupper($str); echo "<br>";
echo strtolower($str); echo "<br>";echo "<br>";
?>

<!-- explode(구분자, 문자열): 문자열=>배열로 변환 -->
<?php
$pizza="piece1 piece2 piece3 piece4 piece5 piece6";
$arr=explode(" ", $pizza);
var_dump($arr);echo "<br>";

foreach($arr as $element) {
    echo  $element;
    echo  ("\t");
}
echo "<br>";echo "<br>";
?>

<!-- implode(구분자, 배열): 배열=>문자열로 변환 -->
<?php
$arr = array("piece1", "piece2", "piece3");
// 배열을 | 기준으로 문자열로 출력
$arr = implode("|", $arr);
echo $arr; echo "<br>";echo "<br>";
?>

<!-- str_replace(바꿀문자열부분, 바뀌는문자열부분, 대상문자열): 문자열 치환 -->
<?php
$str = "Marry should study hard";
// should -> could로 변경해서 출력
$str = str_replace("should", "could", $str);
echo $str;
?>