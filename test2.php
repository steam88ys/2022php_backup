<?php
$id = $_POST['id'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$name = $_POST['name'];
$content = $_POST['content'];

$gender2 = $_POST['gender'];
$sel2 = $_POST['sel'];

if($pass == $repass) {
    echo "아이디: ".$id."<br>비밀번호: ".$pass."<br>이름: ".$name.
    "<br>성별: ".$gender2."<br>전화번호: ".$sel2.
    "<br>자기소개: ".$content."<br>";
    for($i = 0; $i<count($_POST['hobby']); $i++) {
        $a = $_POST['hobby'][$i];
        echo $a."<br>";
    }
}
else {
    // echo "aa";
    echo "<script>alert('not equal');history.go(-1);</script>";
}
?>