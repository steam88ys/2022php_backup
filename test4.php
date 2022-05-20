<?php
    $cnt=0;
    $sum=0;
    for($i=100; $i<1000; $i++) {
        if($i%4==0) {
            $cnt++;
            $sum+=$i;
        }
    }

    echo "갯수: ".$cnt;
    echo "<br>합: ".$sum;
?>