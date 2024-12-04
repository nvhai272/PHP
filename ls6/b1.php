<?php
function swapFloat(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 1.2;
$y = 3.4;

echo "Before swap: x = $x, y = $y\n";
swapFloat($x, $y);
echo "After swap: x = $x, y = $y\n";
?>


<?php
function displayInfo($params = []) {

    $name = $params['name'] ?? 'Unknown';
    $age = $params['age'] ?? 'N/A';

    echo "Name: $name, Age: $age\n";
}

displayInfo(['name' => 'Alice', 'age' => 25]);

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
