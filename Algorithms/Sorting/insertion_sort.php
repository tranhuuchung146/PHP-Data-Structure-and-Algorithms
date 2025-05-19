<?php
$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

function insertion_sort(&$arr) {
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
}

insertion_sort($arr);
print_r($arr);
