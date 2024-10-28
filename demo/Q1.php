<?php
$c = mysqli_connect('127.0.0.1:3307','root','');    
$first = $_POST['first'];
$second = $_POST ['second'];
if (isset ($_POST['first']) && isset ($_POST ['second'])) {
    $res = $first + $second ;
}
?>
<form method = "POST">
First : <input type="number" name="first"><br>
Second : <input type="number" name="second"> <br>
Operator : <input type="text" value='+'><br>
<input type="submit" value="Compute" name ="com"> <br>

Result: <input type="text" value = <?php echo $res ?> >
</form>