<?php


class Student3
{
    public $name;
    public $age = 0;
    public $location;
    public $birthday;
    public $score = "";

    public function __construct()
    {
        echo "<br> nội dung của constructor";
    }

    public function demo() {
        echo "<br> demo";
    }
}

$huy = new Student3();
$huy->demo();