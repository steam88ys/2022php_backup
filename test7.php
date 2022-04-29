<?php

$score = 86;
$score_num = $score/10;

if($score>=90) {
    echo("A");
}
else if($score>=80) {
    echo("B");
}
else if($score>=70) {
    echo("C");
}
else if($score>=60) {
    echo("D");
}
else {
    echo("F");
}
echo("<br>");

switch (intval($score_num)) {
    case 9:case 10: 
        echo("A"); break;
    case 8:  
        echo("B"); break;
    case 7:  
        echo("C"); break;
    case 6:  
        echo("D"); break;
    default: 
        echo("F"); break;
}

?>