<?php
function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    // Duyệt qua các vị trí trong chuỗi
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;
        // Kiểm tra từng ký tự của chuỗi con
        while ($j < $substringLength && $string[$i + $j] === $substring[$j]) {
            $j++;
        }

        // Nếu độ dài chuỗi con bằng độ dài chuỗi con và các ký tự khớp nhau
        if ($j === $substringLength) {
            return true; // Chuỗi là chuỗi con của chuỗi khác
        }
    }

    return false; // Chuỗi không phải là chuỗi con của chuỗi khác
}

$string = "Hello, world!";
$substring = "world";

if (isSubstring($string, $substring)) {
    echo "'$substring' là chuỗi con của '$string'.";
} else {
    echo "'$substring' không là chuỗi con của '$string'.";
}
?>
