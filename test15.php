<?php
// 1. 파일을 여는데 모드 체크해서 열기
$fp = fopen("write.txt", "w");
$str = "Marry has a dog";

// 2. 파일에 $str을 쓴다.
fwrite($fp, $str);

// 3. 파일을 닫는다.
fclose($fp);
?>