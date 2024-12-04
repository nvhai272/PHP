<?php
class Student {
    public $name;
    public $age;
    public $class;

    public function __construct($name, $age, $class) {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function displayInfo() {
        echo "Student Name: {$this->name}, Age: {$this->age}, Class: {$this->class}";
    }
}

// Ví dụ sử dụng:
$student = new Student("Alice", 20, "CS101");
$student->displayInfo();
?>

