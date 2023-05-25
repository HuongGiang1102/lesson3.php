<?php
function isEven($number) {
    return $number % 2 === 0;
}

$number = 12;
if (isEven($number)) {
    echo "Số $number là số chẵn.";
} else {
    echo "Số $number không là số chẵn.";
}
?>