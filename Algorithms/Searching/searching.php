<?php
$n = 8;
$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

function linearSearch($n, $arr){
    for ($i = 0; $i < count($arr); $i++) {
        if ($n == $arr[$i]){
            return "Linear index: ".$i."\n";
        }
    }
    return "Linear not found\n";
}

function binary_search($arr, $n) {
    sort($arr);
    $left = 0;
    $right = count($arr)-1;

    while ($left <= $right) {
        $mid = floor(($right + $left) / 2);
        if ($arr[$mid] == $n) {
            return "Binary index: ".$mid."\n";
        }
        else if ($arr[$mid] > $n) {
            $right = $mid - 1;
        }
        else {
            $left = $mid + 1;
        }
    }
    return "Binary not found\n";
}

function binary_search_recursive($arr, $n, $left, $right) {
    if ($left > $right) return "Recursive not found\n";

    $mid = floor(($right + $left) / 2);

    if ($arr[$mid] == $n) {
        return "Recursive index: ".$mid."\n";
    }
    else if ($arr[$mid] > $n) {
        return binary_search_recursive($arr, $n, $left, $mid - 1);
    }
    else {
        return binary_search_recursive($arr, $n, $mid + 1, $right);
    }
}

echo linearSearch($n, $arr);
sort($arr); // Sắp xếp 1 lần dùng cho 2 binary search
echo binary_search($arr, $n);
echo binary_search_recursive($arr, $n, 0, count($arr)-1);
