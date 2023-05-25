<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5;
$factorial = factorial($number);

echo "Giai thừa của số $number là: $factorial";
?>