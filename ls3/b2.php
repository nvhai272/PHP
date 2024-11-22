<form method="post">
<label>Nhap doan van ban:</label>
<textarea type="text" name="text_input"></textarea>        
        <br>
        <button type="submit">Count so tu trong doan van ban</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$text = $_POST['text_input'];
$words = explode(" ", $text);
echo "So tu trong doan van ban la: ". count($words);}
?>

<?php
if (isset($_POST['text_input'])) {
    $text = $_POST['text_input'];
    $words = explode(" ", trim($text));
    $word_count = count(array_filter($words));
    echo "Số từ trong đoạn văn bản là: " . $word_count;
}
?>