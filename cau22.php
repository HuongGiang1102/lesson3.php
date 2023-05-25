<?php
function gcd($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function lcm($a, $b)
{
    return ($a * $b) / gcd($a, $b);
}

$num1 = 12;
$num2 = 18;

$gcd = gcd($num1, $num2);
$lcm = lcm($num1, $num2);

echo "Ước số chung lớn nhất của $num1 và $num2 là: $gcd" . PHP_EOL;
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm" . PHP_EOL;
?>