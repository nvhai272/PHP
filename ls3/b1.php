<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Máy tính PHP</title>
</head>
<body>
    <form method="post">
        <label>Nhập số thứ nhất:</label>
        <input type="number" step="any" name="number1" required>
        <br>
        <label>Nhập số thứ hai:</label>
        <input type="number" step="any" name="number2" required>
        <br>
        <button type="submit">Tính toán</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = floatval($_POST["number1"]);
        $number2 = floatval($_POST["number2"]);

        $sum = $number1 + $number2;
        $difference = $number1 - $number2;
        $product = $number1 * $number2;
        $quotient = $number2 != 0 ? $number1 / $number2 : 'Không thể chia cho 0';

        echo "<h3>Kết quả:</h3>";
        echo "Cộng: $number1 + $number2 = $sum<br>";
        echo "Trừ: $number1 - $number2 = $difference<br>";
        echo "Nhân: $number1 * $number2 = $product<br>";
        echo "Chia: $number1 / $number2 = $quotient<br>";
    }
    ?>
</body>
</html>
