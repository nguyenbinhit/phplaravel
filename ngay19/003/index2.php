<?php

abstract class XiaomiM2 {
    public $name = "xiaomiM2";
    public $info = "ram 4gb camera AI";


    // tạo ra method trừu tượng
    //chú ý: không có code thực thi
    //khi khai  báo thì chỉ khai báo tên
    abstract public function publish();
//    abstract public function publish1();
}

class VN_XiaomiM2 extends XiaomiM2 {
    public function publish()
    {
        // TODO: Implement publish() method.
        echo "<br> tên: " .$this->name;
        echo "<br> thông tin: " .$this->info;
        echo "<br> giá bán 2 triệu";
    }
}

class China_XiaomiM2 extends XiaomiM2 {
    public function publish()
    {
        // TODO: Implement publish() method.
        echo "<br> 姓名: " .$this->name;
        echo "<br> 信息: " .$this->info;
        echo "<br> 售价2000元";
    }
}

?>