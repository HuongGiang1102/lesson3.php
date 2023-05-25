<?php
function sumOddNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }

    return $sum;
}

$n = 10; // Số n cho trước

$oddSum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $oddSum";
?>