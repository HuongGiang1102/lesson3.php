<?php
function sumArray($array) {
    $sum = 0;

    foreach ($array as $number) {
        $sum += $number;
    }

    return $sum;
}

$array = [5, 2, 9, 1, 7, 3];
$sum = sumArray($array);

echo "Tổng của các số trong mảng là: $sum";
?>
