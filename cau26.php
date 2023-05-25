<?php
function findLargestPositiveNumber($arr) {
    $largestPositiveNumber = null;

    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositiveNumber === null || $num > $largestPositiveNumber)) {
            $largestPositiveNumber = $num;
        }
    }

    return $largestPositiveNumber;
}

// Mảng ví dụ
$array = [5, -2, 10, -7, 3, 8, -1];

// Tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositiveNumber($array);

if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositive";
} else {
    echo "Không có số dương trong mảng";
}
?>