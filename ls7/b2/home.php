<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Xin chào <?php echo $_SESSION['username']; ?></h1>
    <a href="home.php?logout=true">Logout</a>
</body>
</html>
