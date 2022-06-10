<?php
// 사용자가 입력한 값 출력
$a = $_POST['uname'];
// uname에 들어있는 값을 가져와서 a에 대입
echo "입력하신 이름은 ".$a."입니다.<br>";

$b = $_POST['uid'];
echo "입력하신 아이디는 ".$b."입니다.<br>";


// 이름:park 아이디:parkID
if($a == "park" && $b == "parkID") echo "로그인되었습니다.";
else if ($a == "park" || $b == "parkID") echo "아이디나 비밀번호가 틀렸습니다.";
else echo"회원이 아닙니다.";

?>