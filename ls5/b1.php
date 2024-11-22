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




Bài 1. Viết hàm đổi chỗ 2 số float.
Ví dụ: $x = 1.2; $y = 3.4;
Sau khi gọi hàm thì in ra kết quả và phải thấy rằng $x = 3.4 còn $y = 1.2

Bài 2.
a. Tạo và sử dụng(gọi) hàm có tham số được đặt giá trị mặc định.
b. Tạo và sử dụng(gọi) hàm có tham số được đặt tên.

Bài 3.
Tạo file php để chạy trên web: in ra ngày và thời gian của thời điểm hiện tại theo định dạng 2 dòng dưới đây:
Dòng 1: Hôm nay là ngày: 24/10/2024
Dòng 2: Thời gian hiện tại là: 10:20:30
Trong đó phần số thời gian(10:20:30): liên tục thay đổi theo từng giây thời gian thực.
Chú ý: Biết cách đổi timezone.



Bài 1:
Tạo duy nhất 1 file: bai1.php để chạy trên web với tính năng như sau:
a. Hiển thị trên web giao diện cho phép user nhập các thông tin:
    - Quê quán: 63 tỉnh thành Việt Nam (select box)
    - Giới tính: nam, nữ (radio box)
    - Sở thích: âm nhạc, thể thao, lập trình (check box)
    - Màu yêu thích: 1 trong 7 màu: đỏ, cam, vàng, lục, lam, chàm, tím (tùy các bạn bố trí hình thức hiển thị)
    - Nút "Save" (button)
b. Khi user click vào nút "Save" thì sẽ:
    - Hiển thị ở chính trang bai1.php: Cảm ơn bạn đã nhập thông tin.
    - Thông tin mà user đã nhập ở trên được lưu lại trong Cookie. 
    - Khi user đóng trình duyệt rồi mở lại bai1.php thì thông tin đã nhập cũ được phải được thể hiện trên nội dung trang(thông tin đã chọn).


Bài 2:
Tạo 2 file: login.php và home.php chạy trên web với tính năng như sau:
(Chú ý: khi dùng session nhớ gọi hàm 

session_start() trước)
a. Đăng nhập (login.php):
    - Username: nhập tên đăng nhập.
    - Password: nhập mật khẩu.
    - Nút "Login": khi ấn vào thì tiến hành xử lý đăng nhập:
        + Nếu Username = 'admin' và Password = '12345678' thì coi như đăng nhập thành công và sẽ redirect sang trang home.php
        + Nếu khác thông tin trên thì đăng nhập thất bại và hiển thị thông tin: Bạn đã nhập sai thông tin.
b. Trang chủ (home.php):
    - Nếu user đã đăng nhập thì hiển thị thông tin: Xin chào admin ('admin' là Username đã đăng nhập ở trên), và có link cho phép đăng xuất (Logout).
    - Nếu user click vào Logout thì sẽ tiến hành đăng xuất, redirect về trang login.php
c. Hoàn thiện logic xử lý đăng nhập, đăng xuất:
    - Khi vào trang login.php: nếu chưa đăng nhập thì ở nguyên trang đó, nếu đã đăng nhập thì redirect đến trang home.php
    - Khi vào trang home.php: nếu chưa đăng nhập thì redirect đến trang login.php, nếu đã đăng nhập thì ở nguyên trang đó.

Bài 3:
a. Tạo file bai3.php chạy trên CMD, có các chức năng như sau:
    - Khi chạy câu lệnh: [php bai3.php bai3.txt "Xin chào Việt Nam"] thì file bai3.txt sẽ được tạo, nội dung trong đó là: "Xin chào Việt Nam".
b. Tạo file bai3_csv.php chạy trên CMD có các chức năng như sau:
    - Khi chạy câu lệnh: [php bai3_csv.php write] thì file csv bai3.csv được tạo có nội dung như sau: (4 dòng, 4 cột)
id,name,age,mark
1001,"Tên 1",18,9.5
1002,"Tên 2",19,9
1003,"Tên 3",20,8.5

    - Khi chạy câu lệnh: [php bai3_csv.php read] thì nội dung file bai3.csv ở trên sẽ được hiển thị dưới dạng mảng(var_dump) như sau:
$array_data = [
    ['id', 'name', 'age', 'mark'],
    [1001, 'Tên 1', 18, 9.5],
    [1002, 'Tên 2', 19, 9],
    [1003, 'Tên 3', 20, 8.5],
];


B1
Tạo file bai1.php (chạy trên CMD) có chức năng như sau:
1. Tạo Database: db_student
2. Tạo bảng: student gồm các cột: id(số nguyên, khóa chính), tên(có thể viết tiếng Việt), tuổi(số nguyên), điểm(số thực).
3. Insert 5 dòng dữ liệu vào bảng student ở trên.

Bài 2:
Tạo file bai2.php (chạy trên web) có chức năng như sau:
1. Khi mở file bai2.php trên web: sẽ hiển thị dạng bảng danh sách sinh viên lấy từ bảng student ở trên.
2. Có các button để thực hiên các chức năng: Xóa(delete), Cập Nhật(update), Thêm(insert) sinh viên.



Bài 1:
1. File: Student.php: Viết một lớp PHP có tên là 'Student' với các thuộc tính như 'tên', 'tuổi' và 'lớp'. Tạo một phương thức để hiển thị thông tin sinh viên.
2. File: Vehicle: Viết một lớp PHP có tên là 'Vehicle' với các thuộc tính như 'brand', 'model' và 'year'. Tạo một phương thức để hiển thị thông tin chi tiết về xe.

Bài 2:
Viết một lớp trừu tượng(abstract class) PHP có tên là 'Animal' với các phương thức trừu tượng như 'eat()' và 'makeSound()'. Tạo các lớp con như 'Dog', 'Cat' và 'Bird' để triển khai các phương thức này.

Bài 3:
File: Product.php: Viết một lớp có tên là 'Product' với các thuộc tính như 'name' và 'price'. Cài đặt interface 'Comparable' để so sánh các sản phẩm dựa trên giá của chúng.

Bài 4:
Viết một lớp có tên là 'Authentication' với các phương thức tĩnh để xác thực:
- validateEmail: đúng định dạng email.
- validatePassword: từ 8-50 ký tự, có cả số và ký tự, có cả ký tự in hoa và in thường, có cả ký tự đặc biệt.
- validateName: bắt buộc nhập, <100 ký tự.
- validateAge: là số nguyên, từ 1 tới 100.