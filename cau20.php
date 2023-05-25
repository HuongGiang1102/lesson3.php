//thêm vào cuối 
<?php
$array = [1, 2, 3];
$element = 4;

array_push($array, $element);

print_r($array);
?>
//thêm vào đầu
<?php
$array = [2, 3, 4];
$element = 1;

array_unshift($array, $element);

print_r($array);
?>