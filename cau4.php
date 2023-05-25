<?php
function containsWord($string, $word) {
    $string = strtolower($string);
    $word = strtolower($word);
    return strpos($string, $word) !== false;
}

$string = "Hello world!";
$word = "hello";

if (containsWord($string, $word)) {
    echo "Chuỗi '$string' chứa từ '$word'.";
} else {
    echo "Chuỗi '$string' không chứa từ '$word'.";
}
?>