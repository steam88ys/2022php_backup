<?php
// 1. 파일을 여는데 모드 체크해서 열기
$fp = fopen("write.txt", "w");
$str = "Marry has a cat";

// 2. 파일에 $str을 쓴다.
//  fwrite($fp, $str);
file_put_contents("write2.txt", $str);

// 3. 파일을 닫는다.
fclose($fp);

echo "saved.";
?>