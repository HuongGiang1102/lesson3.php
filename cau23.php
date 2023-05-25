<?php
function isPerfectNumber($number)
{
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    return $sum == $number;
}

$number = 28;

if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo";
} else {
    echo "$number không phải là số hoàn hảo";
}
?>