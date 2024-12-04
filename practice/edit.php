<?php
include "connect.php";
$con = connectDatabase();
ob_clean();

$emp_id = $_GET['emp_id'] ?? null;

if ($emp_id) {
    $query = mysqli_query(
        $con,
        "SELECT employees.*, rooms.room_name
        FROM employees
        LEFT JOIN rooms ON employees.room_id = rooms.room_id
        WHERE employees.emp_id = $emp_id"
    );

    if ($query) {
        $emp = mysqli_fetch_array($query);
        $room = mysqli_query($con, "SELECT room_id, room_name FROM rooms WHERE room_id != {$emp['room_id']}");
    } else {
        echo "Error: " . mysqli_error($con); 
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>

<body>
    <form method="post" action="">
        Employee Name: <input type="text" name="name" value="<?php echo ($emp['name']); ?>" required>
        <br><br>
        Employee DOB: <input type="date" name="dob" value="<?php echo ($emp['birthday']); ?>" required>
        <br><br>
        Employee Email: <input type="email" name="email" value="<?php echo ($emp['email']); ?>" required>
        <br><br>
        Employee Phone: <input type="text" name="phone" value="<?php echo ($emp['phone']); ?>" required>
        <br><br>
        Gender: 
        <input type="radio" name="gender" value="female" <?php echo ($emp['gender'] == 'female' ? 'checked' : 'checked'); ?> >Female
        <input type="radio" name="gender" value="male" <?php echo ($emp['gender'] == 'male' ? 'checked' : ''); ?> >Male 
        <br><br>
        Room:
        <select name="room_id" required>
            <option value="<?php echo ($emp['room_id']); ?>" selected><?php echo ($emp['room_name']); ?></option>

            <?php
            while ($row = mysqli_fetch_assoc($room)) {
                echo "<option value='{$row['room_id']}'>{$row['room_name']}</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emp_id = $_GET['emp_id']; 
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $gender = $_POST['gender']; 
    $room_id = $_POST['room_id'];

    $query = "UPDATE employees SET
                name = '$name',
                birthday = '$dob',
                email = '$email',
                phone = '$phone',
                -- gender = '$gender',
                room_id = $room_id
              WHERE emp_id = $emp_id";

    if (mysqli_query($con, $query)) {
        header("Location: list.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
