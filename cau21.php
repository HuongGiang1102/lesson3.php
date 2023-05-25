<?php
$array = [5, 3, 9, 1, 7, 2, 6];
$max = $array[0];
$secondMax = null;

foreach ($array as $value) {
    if ($value > $max) {
        $secondMax = $max;
        $max = $value;
    } elseif ($value < $max && ($secondMax === null || $value > $secondMax)) {
        $secondMax = $value;
    }
}

if ($secondMax !== null) {
    echo "Số lớn thứ hai trong mảng là: $secondMax";
} else {
    echo "Không tìm thấy số lớn thứ hai trong mảng";
}
?>