<?php
if ($argc !== 3) {
    echo "Usage: php bai3.php <filename> <content>\n";
    exit(1);
}

$filename = $argv[1];
$content = $argv[2];

// Ghi nội dung vào file
file_put_contents($filename, $content);
echo "Đã tạo file $filename với nội dung: \"$content\"\n";
?>
                    