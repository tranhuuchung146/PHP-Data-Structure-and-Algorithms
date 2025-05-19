<?php

$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

function insertion_sort($arr) {
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    echo "Insertion Sort: ";
    print_r($arr);
}

function bubble_sort($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $t = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $t;
            }
        }
    }
    echo "Bubble Sort: ";
    print_r($arr);
}

function selection_sort($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $t = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $t;
    }
    echo "Selection Sort: ";
    print_r($arr);
}

// Gọi hàm
insertion_sort($arr);
bubble_sort($arr);
selection_sort($arr);
