<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

function displayDateTime() {
    echo "Hôm nay là ngày: " . date("d/m/Y") . "<br>";
    echo "Thời gian hiện tại là: " . date("H:i:s") . "<br>";
}

displayDateTime();
?>
<script>
    setInterval(function() {
        window.location.reload();
    }, 1000);
</script>
