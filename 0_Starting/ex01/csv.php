<?php
    $file = fopen("ex01.txt", "r") or die("Unable to open file!");
    $data = fread($file, filesize("ex01.txt"));
    $arr = explode(",", $data);
    fclose($file);
    $i = 0;
    while ($i < count($arr)) {
        echo $arr[$i];
        if ($i < count($arr) - 1)
            echo "\n";
        $i++;
    }
?>