<?php
    $Jaksum=0;
    $Holsum=0;

    for($i=0; $i<5; $i++) {
        if((i+1)%2==0) $Jaksum+=$i;
        else $Holsum+=$i;
    }

    echo "짝수의 합 = ".$Jaksum;
    echo "<br>홀수의 합 = ".$Holsum;
?>