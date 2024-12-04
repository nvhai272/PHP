<?php
include("connect.php");
$con = connectDatabase();
echo "<br>";

// Tạo bảng rooms
$query = "CREATE TABLE IF NOT EXISTS rooms(
    room_id int(11) AUTO_INCREMENT PRIMARY KEY,
    room_name varchar(50) NOT NULL,
    startdate DATE NOT NULL
)";

if (mysqli_query($con, $query)) {
    echo "Tạo bảng rooms thành công<br>";
} else {
    echo "Lỗi khi tạo bảng rooms: " . mysqli_error($con) . "<br>";
}

// Thêm dữ liệu vào bảng rooms
$query = "INSERT IGNORE INTO rooms(room_id, room_name, startdate) VALUES 
    (1, 'Quan li nhan su', '2005-08-15'),
    (2, 'Cham soc khach hang', '2004-11-11')";

if (mysqli_query($con, $query)) {
    echo "Thêm dữ liệu vào bảng rooms thành công<br>";
} else {
    echo "Lỗi khi thêm dữ liệu vào bảng rooms: " . mysqli_error($con) . "<br>";
}


// Tạo bảng employees
$query = "CREATE TABLE IF NOT EXISTS employees(
    emp_id int(11) AUTO_INCREMENT PRIMARY KEY,
    name varchar(50) NOT NULL,
    birthday DATE NOT NULL,
    email varchar(50),
    phone varchar(10) NOT NULL,
    room_id int(11),
     FOREIGN KEY (room_id) REFERENCES rooms(room_id)
)";

if (mysqli_query($con, $query)) {
    echo "Tạo bảng employees thành công<br>";
} else {
    echo "Lỗi khi tạo bảng employees: " . mysqli_error($con) . "<br>";
}

// Thêm dữ liệu vào bảng employees
$query = "INSERT IGNORE INTO employees(emp_id, name, birthday, email, phone,room_id) VALUES 
    (1, 'Nguyen Van A', '2000-08-15', 'nva123@gmail.com', '0356789000',1),
    (2, 'Tran Van B', '2000-11-11', 'tvb1234@gmail.com', '0345678900',2)";

if (mysqli_query($con, $query)) {
    echo "Thêm dữ liệu vào bảng employees thành công<br>";
} else {
    echo "Lỗi khi thêm dữ liệu vào bảng employees: " . mysqli_error($con) . "<br>";
}

// Đóng kết nối
mysqli_close($con);

