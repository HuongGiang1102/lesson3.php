<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function findPrimesInRange($start, $end) {
    $primes = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

$start = 1;
$end = 100;
$primeNumbers = findPrimesInRange($start, $end);

echo "Các số nguyên tố từ $start đến $end là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}
?>