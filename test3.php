<?php
    $cnt=0;
    
    for($i=1; $i<=100; $i++) {
        if($i%4==0) {
            $cnt++;
            if($cnt%9==0) echo "<br>";
            echo $i."\t";
        }
    }
?>