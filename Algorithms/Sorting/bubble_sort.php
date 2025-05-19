<?php
$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

function bubble_sort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Hoán đổi
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    print_r($arr);
}

bubble_sort($arr);
