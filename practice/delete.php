<?php
include("connect.php");
$con = connectDatabase();
ob_end_clean();

if (isset($_GET['emp_id'])) {
    $id = $_GET['emp_id'];
  
    $query = mysqli_query($con, "delete from employees where emp_id =$id");
    if (!$query) {
        header("Location: list.php?message=error");
    } else {
        header("Location: list.php");
    }
    mysqli_close($con);

}else{
    header("Location: list.php?message=invalid");
}
?>