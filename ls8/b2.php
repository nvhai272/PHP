<?php
include 'b1.php';
ob_end_clean();   // Clear the buffer without displaying it

// session_start();
$connect = connectDatabase();

$query = "SELECT * FROM student";
$result = mysqli_query($connect, $query);

// Handle form submissions for Insert, Update, and Delete
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $connect->query("DELETE FROM student WHERE id=$id");
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $score = $_POST['score'];
        $connect->query("UPDATE student SET name='$name', age=$age, score=$score WHERE id=$id");
    } elseif (isset($_POST['insert'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $score = $_POST['score'];
        $connect->query("INSERT INTO student (name, age, score) VALUES ('$name', $age, $score)");
    }
}

$result = $connect->query("SELECT * FROM student");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

<h2>Student List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Score</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <form method="post">
                <td><?= $row['id'] ?></td>
                <td><input type="text" name="name" value="<?= $row['name'] ?>"></td>
                <td><input type="number" name="age" value="<?= $row['age'] ?>"></td>
                <td><input type="text" name="score" value="<?= $row['score'] ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit" name="update">Update</button>
                    <button type="submit" name="delete">Delete</button>
                </td>
            </form>
        </tr>
    <?php endwhile; ?>
    <tr>
        <form method="post">
            <td>New</td>
            <td><input type="text" name="name" required></td>
            <td><input type="number" name="age" required></td>
            <td><input type="text" name="score" required></td>
            <td><button type="submit" name="insert">Insert</button></td>
        </form>
    </tr>
</table>

</body>
</html>

<?php
$connect->close();
?>
