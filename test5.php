<?php
    $Jak=0;
    $Hol=0;

    for($i=1; $i<=30; $i++) {
        if($i%2==0) $Jak+=$i;
        else $Hol+=$i;
    }

    echo "짝수의 합: ".$Jak;
    echo "<br>홀수의 합: ".$Hol;

?>