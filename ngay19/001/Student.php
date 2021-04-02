<?php
    //tạo 1 lớp : class Tên class chữ cái đầu tiên viết hoa
    class Student {
        //khai báo thuộc tính
        //thuộc tính chỉ ra đặc điểm tính chất của đối tượng

        public $name;
        public $age = 0;
        public $location;
        public $birthday;
        public $score = "";

        //khai báo phương thức
        //phương thức gần giống như hàm function
        //function nằm ngoài class còn method phương thức nằm trong class
        //phương thức = method
        //phương thức chỉ ra các hành động

        public function enroll($name,$age,$location,$birthday) {
            //phương thức nhập học
            //gán đối số của method vào trong thuộc tính của class
            //từ khoá $this

            $this->name = $name;
            $this->age = $age;
            $this->location = $location;
            $this->birthday = $birthday;

        }

        public function testExam($score) {
            $this->score = $score;
        }

        public function graduate() {
            //phương thức tốt nghiệp
            echo "<br> tên: " .$this->name;
            echo "<br> tuổi: " .$this->age;
            echo "<br> quê quán: " .$this->location;
            echo "<br> sinh nhật: " .$this->birthday;

            if ($this->score >= 5) {
                echo "<br> Cấp bằng";
            }else {
                echo "<br> lưu ban";
            }


            // gọi method khác bên trong method cụ thể
            $this->demo();
        }

        public function demo() {
            echo "<br> demo test nha";
        }

    }


    $nam = new Student();
    //truy cập đến thuộc tính từ bên ngoài class
    // thì chúng ta sẽ sử dụng tên object
    $nam->enroll("nguyễn văn nam", 19, "hà nội", "7/8/1999");
    $nam->testExam(8);

    //xem cấu trúc object
    echo "<pre>";
    print_r($nam);
    echo "</pre>";

    $nam->graduate();

?>