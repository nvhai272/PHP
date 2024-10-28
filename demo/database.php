<?php
function connectDatabase(): mysqli
{
     $servername = "localhost";
    //$servername = "127.0.0.1:3306";
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
    $c = mysqli_connect('127.0.0.1:3306', 'root', '12345678');

    if (!$c) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $s = "CREATE DATABASE IF NOT EXISTS php";
    mysqli_query($c, $s);

    mysqli_select_db($c, 'php');

    $s = "CREATE TABLE IF NOT EXISTS class(
    class_id int(11) primary key,
    classname varchar(8),
    startdate date
    )";

    $s = mysqli_query($c,  $s);
    if ($s) {
        echo "\nTao bang thanh cong";
    }

    $s = "INSERT IGNORE INTO class(class_id,classname,startdate) VALUES 
    (1, 'C2208G', '2022-08-15'),
    (2, 'C2210G', '2022-11-11')";

    $s = mysqli_query($c, $s);

    if ($s) {
        echo "\nThem du lieu thanh cong";
    }

    $s = "CREATE TABLE IF NOT EXISTS student_info(
    student_id int(11) primary key,
    fullname varchar(100),
    id_class int(11),
    birthyear int(11),
    sex varchar(6),
    
    FOREIGN KEY (id_class) REFERENCES class(class_id)
    )";

    $s = mysqli_query($c,  $s);

    if ($s) {
        echo "\nTao bang thanh cong";
    }

    $s = "INSERT IGNORE INTO student_info(student_id,fullname,id_class,birthyear,sex) VALUES 
    (1,'Nguyen Hai Cong',1,2000,'Nam'),
    (2,'Truong Duc Loc',2,2001,'Nam'),
    (3,'Dao Thuy',2,1999,'Nu')";

    $s = mysqli_query($c, $s);

    if ($s) {
        echo "\nThem du lieu thanh cong";
    }

    mysqli_close($c);
}
