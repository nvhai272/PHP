<?php
// Đề bài yêu cầu sắp xếp mảng theo chiều giảm dần của key và value

// Input: Mảng có sẵn
$array = ['d' => 40, 'a' => 50, 'b' => 20, 'e' => 10, 'c' => 30];

// Output 1: Sắp xếp mảng theo chiều giảm dần của key
krsort($array);
echo "Output 1: Sắp xếp mảng theo chiều giảm dần của key:\n";
print_r($array);

// Output 2: Sắp xếp mảng theo chiều giảm dần của value
arsort($array);
echo "Output 2: Sắp xếp mảng theo chiều giảm dần của value:\n";
print_r($array);
?>
