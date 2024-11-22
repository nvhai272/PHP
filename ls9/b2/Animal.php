<?php
abstract class Animal {
    abstract public function eat();
    abstract public function makeSound();
}

class Dog extends Animal {
    public function eat() {
        echo "Dog is eating.\n";
    }

    public function makeSound() {
        echo "Dog barks: Woof Woof!\n";
    }
}

class Cat extends Animal {
    public function eat() {
        echo "Cat is eating.\n";
    }

    public function makeSound() {
        echo "Cat meows: Meow!\n";
    }
}

class Bird extends Animal {
    public function eat() {
        echo "Bird is eating.\n";
    }

    public function makeSound() {
        echo "Bird chirps: Chirp Chirp!\n";
    }
}

$dog = new Dog();
$dog->eat();
$dog->makeSound();

$cat = new Cat();
$cat->eat();
$cat->makeSound();

$bird = new Bird();
$bird->eat();
$bird->makeSound();
?>
