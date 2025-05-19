<?php
$n = 8;
$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

function linear_search($n, $arr) {
    sort($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($n == $arr[$i]) {
            return "Index: ".$i;
        }
    }
    return "Not found";
}
echo linear_search($n, $arr);