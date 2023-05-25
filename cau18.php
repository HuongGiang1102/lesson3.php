<?php
$array = [1, 2, 3, 4, 2, 1, 2, 3, 4, 5];
$element = 2;

$countValues = array_count_values($array);
$count = $countValues[$element] ?? 0;

echo "Số lần xuất hiện của phần tử $element trong mảng: $count";
?>