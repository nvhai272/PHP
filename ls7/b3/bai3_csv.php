<?php
if ($argc !== 2) {
    echo "Usage: php bai3_csv.php <write|read>\n";
    exit(1);
}

$action = $argv[1];
$filename = 'bai3.csv';

if ($action === 'write') {
    // Dữ liệu CSV
    $data = [
        ['id', 'name', 'age', 'mark'],
        [1001, 'Tên 1', 18, 9.5],
        [1002, 'Tên 2', 19, 9],
        [1003, 'Tên 3', 20, 8.5]
    ];

    // Ghi dữ liệu vào file CSV
    $file = fopen($filename, 'w');
    foreach ($data as $row) {
        fputcsv($file, $row);
    }
    fclose($file);
    echo "Đã tạo file $filename với nội dung.\n";

} elseif ($action === 'read') {
    // Đọc dữ liệu từ file CSV và hiển thị dưới dạng mảng
    if (!file_exists($filename)) {
        echo "File $filename không tồn tại.\n";
        exit(1);
    }

    $file = fopen($filename, 'r');
    $array_data = [];
    while (($row = fgetcsv($file)) !== false) {
        $array_data[] = $row;
    }
    fclose($file);

    var_dump($array_data);
} else {
    echo "Lệnh không hợp lệ. Chỉ dùng 'write' hoặc 'read'.\n";
}
?>
