<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["homeTown"])) {
        setcookie("homeTown", $_POST["homeTown"], time() + (86400 * 30), "/");
    }
    if (isset($_POST["gender"])) {
        setcookie("gender", $_POST["gender"], time() + (86400 * 30), "/");
    }
    if (isset($_POST["hobbies"])) {
        setcookie("hobbies", json_encode($_POST["hobbies"]), time() + (86400 * 30), "/");
    } else {
        setcookie("hobbies", "", time() - 3600, "/"); // Xoa
    }
    if (isset($_POST["favoriteColor"])) {
        setcookie("favoriteColor", $_POST["favoriteColor"], time() + (86400 * 30), "/");
    }
    $message = "Cảm ơn bạn đã nhập thông tin.";
} else {
    $message = "";
}

$homeTown = isset($_COOKIE["homeTown"]) ? $_COOKIE["homeTown"] : "";
$gender = isset($_COOKIE["gender"]) ? $_COOKIE["gender"] : "";
$hobbies = isset($_COOKIE["hobbies"]) ? json_decode($_COOKIE["hobbies"]) : [];
$favoriteColor = isset($_COOKIE["favoriteColor"]) ? $_COOKIE["favoriteColor"] : "";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form nhập thông tin</title>
</head>
<body>

<h1>Thông tin cá nhân</h1>
<form action="b1.php" method="post">
    <label for="homeTown">Quê quán:</label>
    <select name="homeTown" id="homeTown">
        <?php
        $provinces = ["An Giang", "Bà Rịa - Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bắc Ninh", "Bến Tre", "Bình Định", "Bình Dương", "Bình Phước", "Bình Thuận", "Cà Mau", "Cần Thơ", "Cao Bằng", "Đà Nẵng", "Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai", "Đồng Tháp", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Nội", "Hà Tĩnh", "Hải Dương", "Hải Phòng", "Hậu Giang", "Hòa Bình", "Hưng Yên", "Khánh Hòa", "Kiên Giang", "Kon Tum", "Lai Châu", "Lâm Đồng", "Lạng Sơn", "Lào Cai", "Long An", "Nam Định", "Nghệ An", "Ninh Bình", "Ninh Thuận", "Phú Thọ", "Phú Yên", "Quảng Bình", "Quảng Nam", "Quảng Ngãi", "Quảng Ninh", "Quảng Trị", "Sóc Trăng", "Sơn La", "Tây Ninh", "Thái Bình", "Thái Nguyên", "Thanh Hóa", "Thừa Thiên Huế", "Tiền Giang", "TP Hồ Chí Minh", "Trà Vinh", "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc", "Yên Bái"];
        foreach ($provinces as $province) {
            $selected = $province == $homeTown ? "selected" : "";
            echo "<option value='$province' $selected>$province</option>";
        }
        ?>
    </select>
    <br><br>

    <label>Giới tính:</label>
    <input type="radio" name="gender" value="Nam" <?php echo ($gender == "Nam") ? "checked" : ""; ?>> Nam
    <input type="radio" name="gender" value="Nữ" <?php echo ($gender == "Nữ") ? "checked" : ""; ?>> Nữ
    <br><br>

    <label>Sở thích:</label>
    <input type="checkbox" name="hobbies[]" value="Âm nhạc" <?php echo in_array("Âm nhạc", $hobbies) ? "checked" : ""; ?>> Âm nhạc
    <input type="checkbox" name="hobbies[]" value="Thể thao" <?php echo in_array("Thể thao", $hobbies) ? "checked" : ""; ?>> Thể thao
    <input type="checkbox" name="hobbies[]" value="Lập trình" <?php echo in_array("Lập trình", $hobbies) ? "checked" : ""; ?>> Lập trình
    <br><br>

    <label for="favoriteColor">Màu yêu thích:</label>
    <select name="favoriteColor" id="favoriteColor">
        <?php
        $colors = ["Đỏ", "Cam", "Vàng", "Lục", "Lam", "Chàm", "Tím"];
        foreach ($colors as $color) {
            $selected = $color == $favoriteColor ? "selected" : "";
            echo "<option value='$color' $selected>$color</option>";
        }
        ?>
    </select>
    <br><br>

    <button type="submit">Save</button>
</form>

<p><?php echo $message; ?></p>

</body>
</html>
