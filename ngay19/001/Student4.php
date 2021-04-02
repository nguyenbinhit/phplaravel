<?php


class Student4
{
    /*
        phương thức đặc biệt : phương thức khởi tạo
        chú ý có 2 Shift trừ liên tiếp __construct
        - phương thức khởi tạo được gọi 1 cách tự động
        - các phương thức khác trong class thì phải gọi 1 cách chủ động
        - __construct được gọi tự động khi chúng ta khởi tạo object
        bằng từ khóa new ClassName()
     * */
    
    public $name;
    public $age = 0;
    public $location;
    public $birthday;
    public $score = "";

    public function __construct($name,$age,$location,$birthday)
    {
        echo "<br> nội dung của constructor";

        //truyền value của đối số
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
        $this->birthday = $birthday;
    }

    public function demo() {
        echo "<br> demo";
    }
}

//ứng dụng thực tiễn của constructor
//thường được sử dụng để truyền các giá trị cho các thuộc tính
//
$huy = new Student4("nguyễn quang huy", 19, "bắc ninh", "1.1.2000");

echo "<pre>";
print_r($huy);
echo "</pre>";