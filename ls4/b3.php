<?php
$inputString = "abcdefgh123423235435";
$getNumberIndex = 8;
for ($i = 0; $i < $getNumberIndex; $i++) {
 $pass .= $inputString[$i];
}
echo "Mật khẩu đã sinh: " . $pass . "\n";
?>
