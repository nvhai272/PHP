<?php

function connectDatabase(): bool|mysqli
{
    // khong dung dc ten localhost
    // $port = 3306;
    // $server = localhost;
    $server = "127.0.1:3306";
    $user = "root";
    $password = "12345678";
    $db = "php";

    $connect = mysqli_connect($server, $user, $password);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected success!";
    }

    mysqli_query($connect, "CREATE DATABASE IF NOT EXISTS $db");

    if (!mysqli_select_db($connect, $db)) {
        echo "<br>Succeeded access to database ";
    } else {
        echo "<br>Loss of access";
    }
    return $connect;
}
//connectDatabase();
?>