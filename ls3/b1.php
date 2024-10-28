<?php
// Kiểm tra xem có đủ tham số đầu vào từ dòng lệnh không
// if ($argc != 3) {
//     echo "Vui lòng nhập 2 số thực.\n";
//     exit(1);
// }

echo "Nhập số thứ nhất: ";
$number1 = floatval(value: trim(fgets(STDIN)));

echo "Nhập số thứ hai: ";
$number2 = floatval(value: trim(fgets(STDIN)));


// Lấy 2 số thực từ dòng lệnh
// $number1 = floatval($argv[1]);
// $number2 = floatval($argv[2]);

// Thực hiện các phép toán
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;

// Kiểm tra chia cho 0
$quotient = $number2 != 0 ? $number1 / $number2 : 'Không thể chia cho 0';

// In kết quả
echo "Kết quả:\n";
echo "Cộng: $number1 + $number2 = $sum\n";
echo "Trừ: $number1 - $number2 = $difference\n";
echo "Nhân: $number1 * $number2 = $product\n";
echo "Chia: $number1 / $number2 = $quotient\n";
?>

