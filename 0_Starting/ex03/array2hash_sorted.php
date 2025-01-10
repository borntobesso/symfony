<?php
    function array2hash_sorted($array) {
        $hash = array();
        foreach ($array as $value) {
            $hash[$value[0]] = $value[1];
        }
        krsort($hash);
        return $hash;
    }
?>