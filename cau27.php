<?php
function findLargestNegativeNumber($arr) {
    $largestNegativeNumber = null;

    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegativeNumber === null || $num > $largestNegativeNumber)) {
            $largestNegativeNumber = $num;
        }
    }

    return $largestNegativeNumber;
}

// Mảng ví dụ
$array = [5, -2, -10, -7, 3, 8, -1];

// Tìm số âm lớn nhất trong mảng
$largestNegative = findLargestNegativeNumber($array);

if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative";
} else {
    echo "Không có số âm trong mảng";
}
?>