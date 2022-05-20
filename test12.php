<!-- is_dir(디렉토리): 디렉토리가 있는지 없는지 여부 
file_exists(디렉토리): 파일이 있는지 없는지 여부 -->
<?php
$dir = "./data";    // PHP_TEST/data
if (is_dir($dir)) {
    echo ("디렉토리가 있다.");
}
else echo ("디렉토리가 없다."); echo "<br>";
?>

<?php
$dir="./";
if (file_exists($dir)) {
    echo ("파일이 있다.");
}
else echo ("파일이 없다.");
?>