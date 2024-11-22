<?php
class Authentication {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePassword($password) {
        return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W).{8,50}$/', $password);
    }

    public static function validateName($name) {
        return !empty($name) && strlen($name) < 100;
    }

    public static function validateAge($age) {
        return filter_var($age, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 100]]) !== false;
    }
}

// Ví dụ sử dụng:
echo Authentication::validateEmail("example@example.com") ? "Valid" : "Invalid";
echo Authentication::validatePassword("P@ssw0rd123") ? "Valid" : "Invalid";
echo Authentication::validateName("John Doe") ? "Valid" : "Invalid";
echo Authentication::validateAge(25) ? "Valid" : "Invalid";
?>
