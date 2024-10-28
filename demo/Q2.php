<?php
 $c = mysqli_connect('127.0.0.1:3307','root','','exam');
 $s = "SELECT * FROM list";
 $r = mysqli_query($c,$s);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border: 1px solid black;
        width:80%;
    }

    th {
        font-weight: 500px;
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
    }
    tr:hover {
            background-color: #f5f5f5;
        }
</style>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php
         while ($row = mysqli_fetch_assoc($r)) {
         ?>
        <tr>
            <td>
            <?php echo $row['ID'] ?>
            </td>
            <td>
            <?php echo $row['Name'] ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <a href="Q2.php">First</a>
    <a href="Q2.php">992</a>
    <a href="Q2.php">993</a>
    <a href="Q2.php">994</a>
    <a href="Q2.php">995</a>
    <a href="Q2.php">996</a>
    <a href="Q2.php">Last</a>
</body>
</html>
