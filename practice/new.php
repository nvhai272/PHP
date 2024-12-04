<?php
ob_start();
include("connect.php");
$con = connectDatabase();
ob_end_clean();

$query = mysqli_query($con, "Select room_id,room_name from rooms");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        DOB: <input type="date" name="birthday" required><br><br>
        Email: <input type="text" name="email" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>

        Gender:<input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male <br><br>
        
        Room: <select name="room_id" required>
            <option value="">--- Room ---</option>

            <?php
            while ($row = mysqli_fetch_assoc($query)) {
                echo "
                <option value='{$row['room_id']}'>{$row['room_name']}</option>
                ";
            }
            ?>
        </select>

        <br><br>
        <input type="submit" value="Submits">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $na = $_POST['name'];
    $bd = $_POST['birthday'];
    $em = $_POST['email'];
    $p = $_POST['phone'];
    $ro_id = $_POST['room_id'];

    $query = "INSERT INTO employees (name, birthday, email, phone, room_id) VALUES('$na','$bd','$em','$p',$ro_id)";
    if (mysqli_query($con, $query)) {
        header("Location:index.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
mysqli_close($con);
?>