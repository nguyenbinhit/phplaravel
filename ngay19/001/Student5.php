<?php


class Student5
{

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

    public function __destruct() {
        //hàm huỷ thường ddc dùng để giải phóng bộ nhớ
        //nó là một method đặc biệt được gọi tự động
        echo "<br> nội dung của destructor";

        // đưa các thuôc tính trở về mặc định
        $this->name = "";
        $this->age = 0;
        $this->location = "";
        $this->birthday = "";
        $this->score = "";
    }
}

$nga = new Student5("lê nga", 19, "nam định", "1.2.1998");

echo "<pre>";
print_r($nga);
echo "</pre>";


echo "<br> kết thúc script trong file chạy";