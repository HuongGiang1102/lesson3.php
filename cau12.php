<?php
$array = [1, 2, 3, 4, 3, 2, 1, 5, 6, 5];
$uniqueArray = array_unique($array);

echo "Mảng ban đầu: ";
print_r($array) ;

echo "Mảng sau khi loại bỏ các phần tử trùng lặp: "; 
print_r($uniqueArray); 
?>