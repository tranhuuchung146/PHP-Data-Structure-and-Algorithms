<?php
$arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

function selection_sort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        // Hoán đổi nếu cần
        if ($min != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }
    print_r($arr);
}

selection_sort($arr);
