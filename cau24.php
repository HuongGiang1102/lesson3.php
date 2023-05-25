<?php
function findLargestOddNumber($array)
{
    $largestOddNumber = null;

    foreach ($array as $number) {
        if ($number % 2 != 0) {
            if ($largestOddNumber === null || $number > $largestOddNumber) {
                $largestOddNumber = $number;
            }
        }
    }

    return $largestOddNumber;
}

$numbers = [2, 8, 5, 12, 9, 4, 7, 3];

$largestOdd = findLargestOddNumber($numbers);

if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOdd";
} else {
    echo "Không có số lẻ trong mảng";
}
?>