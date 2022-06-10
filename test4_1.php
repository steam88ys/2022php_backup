<?php
$gender2 = $_POST['gender'];
$sel2 = $_POST['sel'];
for($i = 0; $i<count($_POST['fruit']); $i++) {
    $a = $_POST['fruit'][$i];
    echo $a."<br>";
}
echo "성별은 ".$gender2."입니다.<br>";
echo "선택은 ".$sel2."입니다.<br>";

?>