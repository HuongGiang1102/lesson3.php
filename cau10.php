<?php
function fibonacciInRange($start, $end) {
    $fibonacci = [];

    $first = 0;
    $second = 1;

    while ($first <= $end) {
        if ($first >= $start) {
            $fibonacci[] = $first;
        }

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }

    return $fibonacci;
}

$start = 1;
$end = 100;
$fibonacciNumbers = fibonacciInRange($start, $end);

echo "Các số Fibonacci từ $start đến $end là: ";
foreach ($fibonacciNumbers as $number) {
    echo $number . " ";
}
?>