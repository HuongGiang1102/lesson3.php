<?php
function isArmstrongNumber($number) {
    $sum = 0;
    $originalNumber = $number;
    $digits = strlen($number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $digits);
        $number = (int)($number / 10);
    }

    if ($originalNumber == $sum) {
        return true;
    } else {
        return false;
    }
}

$number = 153;

if (isArmstrongNumber($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không phải là số Armstrong.";
}
?>