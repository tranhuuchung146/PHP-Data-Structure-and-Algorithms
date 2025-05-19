<?php
$n = 8;
$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

function binary_search($n, $arr){
    sort($arr);
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        $mid = ceil($right + $left) / 2;

        if($arr[$mid] == $n){
            return $mid;
        }
        else if($arr[$mid] > $n) {
            $right = $mid - 1;
        }
        else{
            $left = $mid + 1;
        }
    }
    return -1;
}

echo binary_search($n, $arr);