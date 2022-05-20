<!-- <?php
    $filename = "data.txt";
    $fp = fopen($filename, "r");
    while($c = fgetc($fp)) {
        echo $c."<br/>";
    }
    fclose($fp);
?> -->

<!-- <?php
    $filename = "data.txt";
    $fp = fopen($filename, "r");
    while($s = fgets($fp)) {
        echo $s."<br/>";
    }
    fclose($fp);
?> -->

<?php
$f = file_get_contents($filename);
echo $f;
?>
