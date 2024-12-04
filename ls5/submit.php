<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    $errors = [];
    $data = [];

    function validateInput($info, $pattern, $errorMsg)
    {
        global $errors, $data;
        if (empty($_POST[$info]) || !preg_match($pattern, subject: $_POST[$info])) {
            $errors[$info] = $errorMsg;
        } else {
            $data[$info] = htmlspecialchars($_POST[$info]);
        }
    }

    validateInput('fullName', "/^[A-Za-zÀ-ỹà-ỹ\s]{3,50}$/u", "Họ và tên phải có từ 3 đến 50 ký tự và không có số.");

    if (empty($_POST['age']) || !filter_var($_POST['age'], FILTER_VALIDATE_INT)) {
        $errors['age'] = "Tuổi phải là số nguyên.";
    } else {
        $data['age'] = $_POST['age'];
    }

    if (empty($_POST['gender'])) {
        $errors['gender'] = "Vui lòng chọn giới tính.";
    } else {
        $data['gender'] = $_POST['gender'];
    }

    if (empty($_POST['maritalStatus'])) {
        $errors['maritalStatus'] = "Vui lòng chọn tình trạng hôn nhân.";
    } else {
        $data['maritalStatus'] = $_POST['maritalStatus'];
    }

    if (empty($_POST['hometown'])) {
        $errors['hometown'] = "Vui lòng chọn quê quán.";
    } else {
        $data['hometown'] = $_POST['hometown'];
    }

    if (!empty($_POST['hobbies']) && is_array(value: $_POST['hobbies'])) {
        $data['hobbies'] = $_POST['hobbies']; 
    } else {
        $errors['hobbies'] = "Vui lòng chọn ít nhất một sở thích.";
    }


    validateInput('phoneNumber', "/^\d{10}$/", "Số điện thoại phải có đúng 10 chữ số.");

    validateInput('address', "/^.{1,500}$/", "Nhap dia chi tu 1 den 500 ki tu");

    if ($errors) {
        echo "<h2>Có lỗi trong dữ liệu nhập:</h2>";
        foreach ($errors as $field => $error) {
            echo "<p class='error'>" . ucfirst($field) . ": $error</p>";
        }
    } else {
        
        echo "<h2>Thông tin đã nhập:</h2>";
        echo "<table>
            <tr>
                <th>Họ và tên</th>
                <th>Tuổi</th>
                <th>Giới tính</th>
                <th>Tình trạng hôn nhân</th>
                <th>Quê quán</th>
                <th>Sở thích</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
            </tr>
            <tr>
                <td>{$data['fullName']}</td>
                <td>{$data['age']}</td>
                <td>{$data['gender']}</td>
                <td>{$data['maritalStatus']}</td>
                <td>{$data['hometown']}</td>
                <td>" . implode(", ", $data['hobbies']) . "</td>
                <td>{$data['phoneNumber']}</td>
                <td>{$data['address']}</td>
            </tr>
          </table>";
    }
    ?>

</body>

</html>