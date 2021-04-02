<?php


class Phone
{
    public $numberPhone = 12345678;

    protected function goiDien() {
        echo "<br> gọi điện";
    }

    protected function ngheDien() {
        echo "<br> nghe điện";
    }
}

class SmartPhone extends Phone {
    public $ip = "127.0.0.1";

    public function luotWeb() {
        echo "<br> lướt web";
    }

    public function goiDien() {
        parent::goiDien();
    }

    public function ngheDien() {
        parent::ngheDien();
    }
}

$sonyZ3 = new SmartPhone();
echo "<br>" . $sonyZ3->numberPhone;
echo "<br>" . $sonyZ3->goiDien();
echo "<br>" . $sonyZ3->ngheDien();
echo "<br>" . $sonyZ3->ip;
echo "<br>" . $sonyZ3->luotWeb();
