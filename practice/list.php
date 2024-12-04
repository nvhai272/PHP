<?php
// echo "Hello world";
include "connect.php";
$con = connectDatabase();
ob_end_clean();
$query = mysqli_query($con,
    "SELECT e.emp_id,e.name,DATE_FORMAT(e.birthday,'%d/%m/%Y') as dob, e.email,e.phone,
r.room_name FROM employees e JOIN rooms r ON e.room_id = r.room_id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<a href="new.php">Add New</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Room</th>
            <th>Action</th>

        </tr>
        <?php
while (
    $row = mysqli_fetch_assoc($query)
) {
    echo "<tr>
            <td>{$row['emp_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['room_name']}</td>

            <td>
            <a href='edit.php?emp_id={$row['emp_id']}'>Edit</a>
            <a href='delete.php?emp_id={$row['emp_id']}'>Delete</a>
            </td>
            </tr>";
}
?>
    </table>

    <?php mysqli_close($con)?>
</body>

</html>