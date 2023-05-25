<?php
function isPerfectSquare($num) {
    $sqrt = sqrt($num); // Tính căn bậc hai của số đầu vào
    return ($sqrt - floor($sqrt)) == 0; // Kiểm tra phần thập phân của căn bậc hai
}

function findPerfectSquares($start, $end) {
    $perfectSquares = []; // Mảng để lưu trữ số chính phương

    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) { // Kiểm tra xem số hiện tại là số chính phương hay không
            $perfectSquares[] = $i; // Thêm số chính phương vào mảng
        }
    }

    return $perfectSquares; // Trả về mảng các số chính phương
}

$start = 1; // Giới hạn dưới
$end = 100; // Giới hạn trên

$perfectSquares = findPerfectSquares($start, $end); // Tìm các số chính phương trong khoảng

$count = count($perfectSquares); // Đếm số lượng số chính phương tìm thấy

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
if ($count > 0) {
    echo implode(", ", $perfectSquares); // In ra các số chính phương
} else {
    echo "Không có số chính phương trong khoảng này.";
}
?>
