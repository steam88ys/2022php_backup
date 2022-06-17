<?php

// 파일이름 출력
echo "파일이름: ".$_FILES['userfile']['name']."<br>";

// 파일크기 출력
echo "파일크기: ".$_FILES['userfile']['size']."<br>";

// 파일 타입 출력
echo "파일타입: ".$_FILES['userfile']['type']."<br>";

// 파일의 이상한 이름 출력
echo "파일저장이름: ".$_FILES['userfile']['tmp_name']."<br>";



$uploads_dir ='uploads/';    // ./uploads/도 가능

if(!is_dir($uploads_dir)) { // 업로드 디렉토리가 없으면
    mkdir($uploads_dir);    // 디렉토리를 만들어라
}

$upload_file = $uploads_dir.basename($_FILES['userfile']['name']);
echo $upload_file;

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
    echo "업로드 성공!";
}
else {
    echo "업로드 실패";
}

?>