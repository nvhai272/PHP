<?php
interface Comparable {
    public function compareTo($otherProduct);
}

class Product implements Comparable {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function compareTo($otherProduct) {
        if ($this->price == $otherProduct->price) {
            return 0;
        }
        return ($this->price > $otherProduct->price) ? 1 : -1;
    }
}

$product1 = new Product("Product A", 100);
$product2 = new Product("Product B", 150);
echo $product1->compareTo($product2); // Output: -1 (100 < 150)
?>
