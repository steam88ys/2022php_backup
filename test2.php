<?php
$id = $_POST['id'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$name = $_POST['name'];
$content = $_POST['content'];

if($pass == $repass) {
    echo "아이디: ".$id."<br>비밀번호: ".$pass."<br>이름: ".$name."<br>자기소개: ".$content;
}
else {
    echo "aa";
    echo "<script type='javascript'>alert('not equal');history.go(-1);>";
}

?>