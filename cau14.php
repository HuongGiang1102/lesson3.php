<?php
$array = [10, 5, 8, 3, 2, 1, 7, 6, 4, 9];
$element = 7;

$index = array_search($element, $array);

if ($index !== false) {
    echo "Phần tử $element được tìm thấy tại vị trí $index trong mảng.";
} else {
    echo "Phần tử $element không được tìm thấy trong mảng.";
}
?>