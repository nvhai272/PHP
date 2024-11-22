<?php
function connectDatabase(): mysqli
{
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "12345678";
    $dbname = "php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function createDatabase()
{
    $c = connectDatabase();

    $s = "CREATE DATABASE IF NOT EXISTS php";
    if (mysqli_query($c, $s)) {
        echo "Database created successfully or already exists.\n";
    } else {
        echo "Error creating database: " . mysqli_error($c) . "\n";
    }

    mysqli_select_db($c, 'php');

    $s = "CREATE TABLE IF NOT EXISTS student (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        age INT,
        score FLOAT
    )";

    if (mysqli_query($c, $s)) {
        echo "Table 'student' created successfully or already exists.\n";
    } else {
        echo "Error creating table: " . mysqli_error($c) . "\n";
    }
    $students = [
        ["name" => "Nguyen Van A", "age" => 20, "score" => 7.5],
        ["name" => "Le Thi B", "age" => 21, "score" => 8.0],
        ["name" => "Tran Van C", "age" => 22, "score" => 6.5],
        ["name" => "Hoang Thi D", "age" => 23, "score" => 9.0],
        ["name" => "Pham Van E", "age" => 24, "score" => 7.0]
    ];

    foreach ($students as $student) {
        $s = "INSERT INTO student (name, age, score) VALUES ('{$student['name']}', {$student['age']}, {$student['score']})";
        if (mysqli_query($c, $s)) {
            echo "Inserted student: {$student['name']}\n";
        } else {
            echo "Error inserting student: " . mysqli_error($c) . "\n";
        }
    }

    mysqli_close($c);
}

createDatabase();

echo "Hello, World!\n";
?>
