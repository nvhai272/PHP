<?php
$email = 'ahihi123@gmail.com';

$username = explode('@', $email);
//echo "Username: ". $username[0];

$user = strstr($email, "@", true); // Lấy phần trước ký tự @
//echo $user; 
                                                                                                   
echo"\nCach 2";
$kq="";
for( $i = 0; $i < strlen($email); $i++ ){
    if($email[$i] == '@'){
break;
    }
    $kq .= $email[$i];  
}
echo $kq;
?>