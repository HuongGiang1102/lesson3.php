<?php
$array = [1, 2, 3, 4, 5];
$newElement = 100;
$insertIndex = 2;

echo "Mảng ban đầu: ";
print_r($array);

array_splice($array, $insertIndex, 0, $newElement);

echo "Mảng sau khi chèn phần tử: ";
print_r($array);
?>