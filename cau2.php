<?php
function calculateSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

$n = 10;
$sum = calculateSum($n);

echo "Tổng của các số từ 1 đến $n là: $sum";
?>