<?php

class Goodbye {
    //khai báo 1 hằng số bên trong class
    //tên hằng số viết hoa
    //không có dấu $ trước tên const
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

    public function byebye() {
        //trong class sử dụng self
        echo self::LEAVING_MESSAGE;

    }

}

echo Goodbye::LEAVING_MESSAGE;

?>