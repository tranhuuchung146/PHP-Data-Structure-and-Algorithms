<?php
$n = 8;
$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];
sort($arr);

function binary_search_recursive($arr, $n, $left, $right) {
    if ($left > $right) {
        return -1;
    }

    $mid = floor(($left + $right) / 2);

    if ($arr[$mid] == $n) {
        return $mid;
    }
    else if ($arr[$mid] > $n) {
        return binary_search_recursive($arr, $n, $left, $mid - 1);
    }
    else {
        return binary_search_recursive($arr, $n, $mid + 1, $right);
    }
}

echo binary_search_recursive($arr, $n, 0 , count($arr) - 1);
