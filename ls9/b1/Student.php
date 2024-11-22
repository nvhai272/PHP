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

<?php
class Vehicle {
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Brand: {$this->brand}, Model: {$this->model}, Year: {$this->year}";
    }
}

// Ví dụ sử dụng:
$vehicle = new Vehicle("Toyota", "Corolla", 2020);
$vehicle->displayDetails();
?>
