<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lua chon tinh toan</h1>
    <form action="" method="post">
        <label for="number1">Số thứ nhất:</label>
        <input type="number" id="number1" name="a" required><br><br>

        <label for="number2">Số thứ hai:</label>
        <input type="number" id="number2" name="b" required><br><br>

        <label for="operation">Chọn phép toán:</label>
        <select id="operation" name="operation">
            <option value="add">Cộng</option>
            <option value="subtract">Trừ</option>
            <option value="multiply">Nhân</option>
            <option value="divide">Chia</option>
        </select><br><br>
        

        <input type="submit" value="Tính Toán">
    </form>
    <h2>Kết quả:</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['a'];
        $number2 = $_POST['b'];
        $operation = $_POST['operation'];
        $result = "";

        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'subtract':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Không thể chia cho 0.";
                }
                break;
        }

        echo '<p style="color: red;">' . $number1 . ' ' . ($operation == 'add' ? '+' : ($operation == 'subtract' ? '-' : ($operation == 'multiply' ? '*' : '/'))) . ' ' . $number2 . ' = ' . $result . '</p>';
    }
    ?>
</body>
</html>