<?php
session_start(); 
include 'database.php';
$connect = connectDatabase();
$id = $_GET['student_id'];

$query = $connect->prepare(query: "DELETE FROM student_info WHERE student_id = ?");
$query->bind_param("i", $id);
$query->execute();

if ($query->error) {
    $_SESSION['message'] = "Lỗi khi xóa: " . $query->error;
} elseif ($query->affected_rows > 0) {
    $_SESSION['message'] = "Xóa thành công sinh viên có ID: $id.";
} else {
    $_SESSION['message'] = "Không tìm thấy sinh viên có ID: $id.";
}

header("Location: index.php");
exit;
?>