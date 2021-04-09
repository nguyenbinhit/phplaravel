<?php
class DienThoaiCoDien {
    public $sodienthoai = 123;

    public function methodNghe() {
        echo "<br>" . __METHOD__;
    }
    public function methodGoi() {
        echo "<br>" . __METHOD__;
    }
}

// trait
trait Maytinh {

    public function methodOfice() {
        echo "<br>" . __METHOD__;
    }
    public function methodSendEmail() {
        echo "<br>" . __METHOD__;
    }
    public function methodNhanEmail() {
        echo "<br>" . __METHOD__;
    }
}

trait Radio {
    public function methodNgheSongRadio() {
        echo "<br>" . __METHOD__;
    }
}

trait MayNgheNhac {
    public function methodNgheNhac() {
        echo "<br>" . __METHOD__;
    }
}

class DienThoaiThongMinh extends DienThoaiCoDien {

    //  nạp trait sử dụng đa kế thừa
    // mặc định sử dụng tất cả  các tài sản của các trait

    use Maytinh,MayNgheNhac,Radio;
}

// sử dụng từ class cha đơn kế thừa qua thừ kháo extends
$sonyXperia  = new DienThoaiThongMinh();
$sonyXperia->methodGoi();
echo "<br>" .$sonyXperia->sodienthoai;

//sử dụng tài sản trait đa kế thừa
$sonyXperia->methodNgheNhac();
$sonyXperia->methodNgheSongRadio();
$sonyXperia->methodOfice();