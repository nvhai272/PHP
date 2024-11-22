<?php
header('Content-Type: application/json');

$prefix = isset($_GET['prefix']) ? $_GET['prefix'] : '';

if ($prefix) {
    $conn = new mysqli("localhost", "username", "password", "database");

    if ($conn->connect_error) {
        echo json_encode(["error" => "Database connection failed"]);
        exit;
    }

    $stmt = $conn->prepare("SELECT id, ten FROM Student WHERE ten LIKE ?");
    $likePrefix = "%" . $prefix . "%";
    $stmt->bind_param("s", $likePrefix);
    $stmt->execute();
    $result = $stmt->get_result();

    $students = [];
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }

    echo json_encode($students);

    $stmt->close();
    $conn->close();
} else {
    echo json_encode([]);
}
?>
