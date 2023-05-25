<?php
function isPalindrome($string) {
    $reversedString = strrev($string);
    if ($string === $reversedString) {
        return true;
    } else {
        return false;
    }
}

$string = "mom";

if (isPalindrome($string)) {
    echo "Chuỗi '$string' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$string' không là chuỗi Palindrome.";
}
?>