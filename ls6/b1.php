

<?php
function displayInfo($params = []) {

    $name = $params['name'] ?? 'Unknown';
    $age = $params['age'] ?? 'N/A';

    echo "Name: $name, Age: $age\n";
}

// Gọi hàm với các tham số đặt tên
displayInfo(['name' => 'Alice', 'age' => 25]);

// Gọi hàm chỉ với một số tham số
displayInfo(['name' => 'Bob']);

displayInfo();

function test($params){
$name = $params?? 'Unknown';
echo "Name: $name\n";
}
$a ='alice';
test($a);
test('hehe');
test(null);
?>
