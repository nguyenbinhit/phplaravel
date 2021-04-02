<?php


class Car
{
    public $name;
    private $price;
    protected $color;

    public function __construct($name,$price,$color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
    }

    public function displayPrice() {
        echo "<br> giá: " .$this->price;
    }

    public function displayColor() {
        echo "<br> màu sắc: " .$this->color;
    }
}

$toyotaCamry = new Car("toyotaCamry", 100000000000, "đen");

echo "<pre>";
print_r($toyotaCamry);
echo "</pre>";

echo "<br> tên: " . $toyotaCamry->name;
echo "<br> giá: " . $toyotaCamry->displayPrice();
echo "<br> màu: " . $toyotaCamry->displayColor();
