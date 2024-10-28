<?php
include 'database.php';
$connect = connectDatabase();

$query = " SELECT si.student_id,si.fullname,c.classname,si.birthyear,
        -- c.startdate,
        DATE_FORMAT(c.startdate, '%d/%m/%Y') as startdate, 
 (YEAR(CURDATE()) - si.birthyear) AS age, si.sex 
 FROM student_info si JOIN class c ON si.id_class = c.class_id";

$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Show All Data</h1>

    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <table>
        <tr>
            <th>student_id</th>
            <th>fullname</th>
            <th>classname</th>
            <th>startdate</th>
            <th>birthyear</th>
            <th>age</th>
            <th>sex</th>
            <th>ACTION</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {

            //$formatted_date = date('d/m/Y', strtotime($row['startdate']));

            echo "<tr>
                    <td>{$row['student_id']}</td>
                    <td>{$row['fullname']}</td>
                    <td>{$row['classname']}</td>
                    <td>{$row['startdate']}</td>
                    <td>{$row['birthyear']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['sex']}</td>

                    <td><a href='edit.php?id={$row['student_id']}'>Edit</a> | <a href='delete.php?student_id={$row['student_id']}'>Delete</a></td>
                </tr>";
        }
        ?>
    </table>
    <td><a href='addNew.php'>Add News</a></td>

    <?php mysqli_close($connect); ?>

</body>

</html>