<?php
// 1. count.txt파일을 읽기 모드로 열어서 fp에 대입한다.
$fp = fopen("count.txt", "r");

// 2. fgets()로 읽어서 $num에 대입한다.
$num = fgets($fp);

// 3. (int)함수로 정수형으로 변환해 $count에 저장한다.
$count = (int)$num;

// 4. $count를 1 증가시킨다.
$count += 1;

// 5. 파일을 닫는다.
fclose($fp);


// 6. 파일을 쓰기모드로 연다.
$fp2 = fopen("count.txt", "w");

// 7. fwrite()로 count값을 count.txt로 쓴다.
fwrite($fp2, $count);

// 8. 파일을 닫는다.
fclose($fp2);
?>

<h1>당신은 <span><?php echo $count ?></span>번째 방문자 입니다.</h1>
