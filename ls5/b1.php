Tạo 2 file, chạy trên nền web:
1. view.php:
Nội dung gồm các HTML Control của Form, thể hiện các thông tin sau:
- 1. Họ và tên (text, ít nhất 3 ký tự, nhiều nhất 50 ký tự).
- 2. Tuổi (textbox, kiểu số nguyên).
- 3. Giới tính: nam, nữ (2 radio).
- 4. Tình trạng hôn nhân: độc thân, kết hôn (2 radio).
- 5. Quê quán (select box).
- 6. Sở thích: Thể thao, Âm nhạc, Lập trình (3 checkbox).
- 7. Số điện thoại (text, đúng định dạng 10 chữ số).
- 8. Địa chỉ (text area, nhiều nhất 500 ký tự).
- Nút Submit để gửi dữ liệu sang trang dưới:
2. process.php
- Lấy dữ liệu đã nhập từ trang bên trên.
- Có validate dữ liệu: tất cả các trường đều phải nhập, nhập hợp lệ như đã nói ở trên (ví dụ: tuổi là số nguyên, số điện thoại 10 số,...)
    Nếu dữ liệu không hợp lệ thì hiển thị rõ thông tin không hợp lệ ở đâu.
- Nếu validate OK thì hiển thị lại toàn bộ thông tin đã nhập ở trên theo dạng bảng(table), với các cột là 8 trường ở trên.