<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>

<body>
    <h1>Input Information</h1>
    <form action="submit.php" method="post">
        <label for="">FullName:</label><br>
        <input type="text" name="fullName"><br><br>

        <label for="">Age:</label><br>
        <input type="number" name="age"><br><br>

        <label for="">Gender: </label><br>
        <input type="radio" name="gender" value="Man">
        <label for="html">Man</label>
        <input type="radio" name="gender" value="Woman">
        <label for="css">Woman</label><br><br>

        <label for="">Marital Status: </label><br>
        <input type="radio" name="maritalStatus" value="Độc thân">
        <label for="single">Độc thân</label><br>
        <input type="radio" name="maritalStatus" value="Kết hôn">
        <label for="married">Kết hôn</label><br><br>

        <label for="">HomeTown: </label>
        <select id="hometown" name="hometown">
            <option value="" disabled selected>Chọn thành phố</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="TP.HCM">TP.HCM</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
            <option value="Cần Thơ">Cần Thơ</option>
        </select><br><br>

        <label for="">Interest: </label>
        <input type="checkbox" name="hobbies[]" value="Sports">
        <label for="sports">Sports</label>
        <input type="checkbox" name="hobbies[]" value="Music">
        <label for="music">Music</label>
        <input type="checkbox" name="hobbies[]" value="Programming">
        <label for="programming">Programming</label><br><br>


        <label for="">Phone Number: </label>
        <input type="text" name="phoneNumber"><br><br>

        <label for="">Address:</label><br>
        <textarea name="address" maxlength="500" style="width: 300px; height: 100px;"></textarea><br><br>

        <button type="submit">Submit</button>

    </form>
</body>

</html>