<?php
$dir = opendir(".");    // 현재 디렉토리 열기 (PHP_TEST)
    while ($files = readdir($dir)) {
        echo $files."<br>";
    }
closedir();
echo "<br>";
?>

<?php
$dir = opendir("C:\Bitnami\wampstack-8.1.4-0\apache2");    //  상위 디렉토리 열기 (apache2)
while ($files = readdir($dir)) {
    echo $files."<br/>";
}
closedir();
?>