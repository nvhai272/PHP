<?php
include 'database.php';
session_start();
$connect = connectDatabase();

$query = "SELECT class_id, classname FROM class";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add New Student</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Id: <input type="number" name="id" required><br><br>
        FullName: <input type="text" name="fullname" required><br><br>
        Birth Year: <input type="number" name="birthyear" required><br><br>
        Sex:
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
        <br><br>

        Class:
        <select name="class_id" required>
            <option value="">-- Select Class --</option>
            <?php
            // while ($row = mysqli_fetch_assoc($result)) {
            //     echo "
            //     <option value='{$row['class_id']}'>
            //     {$row['classname']}
            //     </option>
            //     ";
            // }

            // cach 2  

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $row['class_id'] ?>">
                    <?php echo $row['classname'] ?></option>
            <?php } ?>
        </select>

        <br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $birthyear = $_POST['birthyear'];
    $gender = $_POST['gender'];
    $class_id = $_POST['class_id'];

    $query = "INSERT INTO student_info (student_id, fullname, birthyear, sex, id_class) 
              VALUES ('$id', '$fullname', '$birthyear', '$gender', '$class_id')";


    // Sử dụng Prepared Statements để bảo mật
    // $stmt = $connect->prepare("INSERT INTO student_info (student_id, fullname, birthyear, sex, id_class) VALUES (?, ?, ?, ?, ?)");
    // $stmt->bind_param("isssi", $id, $fullname, $birthyear, $gender, $class_id);

    //$stmt->execute() thay cho dieu kien if  duoi

    if (mysqli_query($connect, $query)) {
        $_SESSION['message'] = "New student added successfully!";
        header("Location: index.php");
        exit; 
    } else {
        echo "Error: " . mysqli_error(mysql: $connect); 
    }
}
// Đóng statement
// $stmt->close();

mysqli_close($connect);
?>