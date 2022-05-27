<?php
// 1. 파일을 연다 read.txt파일은 fp를 통해서만 접근가능하다.
$fp = fopen("read.txt", "r");

// 2. 파일 읽어오기 fgetc(), fgets(), fread(), file_get_contents()
$str = file_get_contents("read.txt");
echo $str;

// 3. 파일 닫기
fclose($fp);
?>