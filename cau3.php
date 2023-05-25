<?php
function printMultiplicationTable($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result" . PHP_EOL;
        }
        echo PHP_EOL;
    }
}

$n = 10;
printMultiplicationTable($n);
?>