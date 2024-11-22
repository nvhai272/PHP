<?php
echo "Please enter a 14-character date-time string (e.g., '20241020080159'): ";

$input = trim(fgets(STDIN));

try {
    if (strlen(string: $input) === 14) {
        // Split the string into parts
        $year = substr($input, 0, 4);
        $month = substr($input, 4, 2);
        $day = substr($input, 6, 2);
        $hour = substr($input, 8, 2);
        $minute = substr($input, 10, 2);
        $second = substr($input, 12, 2);

        $output = "$year-$month-$day $hour:$minute:$second";

        // $date = new DateTime(); // Ngày giờ hiện tại
        // echo $date->format("Y-m-d H:i:s");

        $date = new DateTime($output);
        echo $date->format("d/m/Y H:i:s") . "\n";         

        echo "Formatted date-time: " . $output . "\n";
    } else {
        echo "Invalid input. Please enter exactly 14 numeric characters.\n";
    }
} catch (Exception $e) {
    echo "Loi roi" . $e->getMessage() . "";
}

// Bài 2: Lưu file dưới dạng bai2.php để chạy trên CMD với đề bài như sau:
// Input: String dưới dạng email: 'aptech19@domain.com'
// Output: String chỉ chứa username: 'aptech19'



// Bài 3: Lưu file dưới dạng bai3.php 

// để chạy trên CMD với đề bài như sau:
// Input: String dưới dạng tập hợp các ký tự và số: 'abcdefghijklmnopABCDEFGHIJ0123456789' (có thể ko cần đầy đủ theo bảng chữ cái tiếng Anh). Và 1 số chỉ chiều dài của Password(ở phần Output), ví dụ: 8.
// Output: String 8 ký tự, đóng vai trò Password chứa 8 ký tự nằm trong trong chuỗi ở phần Input trên.
// Chú ý: Không được sử dụng hàm rand()

// Bài 4:  
// Lưu file dưới dạng bai4.php  để chạy trên CMD với đề bài như sau:
// Sắp xếp mảng sau theo chiều giảm dần: [-10, 20, -100, 40, -5.3, 1.7, -21.35, 17.19]

// Bài 5:   Lưu file dưới dạng bai5.php  để chạy trên CMD với đề bài như sau:
// Input: Cho mảng có sẵn: ['d' => 40, 'a' => 50, 'b' => 20, 'e' => 10, 'c' =>30]
// Output 1: Sắp xếp mảng theo chiều giảm dần của key, để có kết quả: ['e' => 10, 'd' => 40, 'c' =>30, 'b' => 20, 'a' => 50]
// Output 2: Sắp xếp mảng theo chiều giảm dần của value, để có kết quả: ['a' => 50, 'd' => 40, 'c' =>30, 'b' => 20, 'e' => 10]

// Chú ý: Nếu ko upload được file đuôi .php lên Classroom thì thêm đuôi file .txt, ví dụ: bai1.php.txt -->