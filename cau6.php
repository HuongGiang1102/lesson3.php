<?php
function sortArray($array) {
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

$array = array(5, 2, 9, 1, 7, 3);
$sortedArray = sortArray($array);

echo "Mảng đã được sắp xếp: ";
foreach ($sortedArray as $value) {
    echo $value . " ";
}
?>