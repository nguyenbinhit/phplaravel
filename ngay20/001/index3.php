<?php
class DienThoaiCoDien {
    public static $sodienthoai = 123;

    public static function methodNghe() {
        echo "<br>" . __METHOD__;
    }
    public static function methodGoi() {
        // không được dùng từ khoá $this trong phương thức static
        echo "<br>" . __METHOD__;

        $a = new self();
        // gọi đến method thường bên trong method tĩnh
        $a->abc();

        // gọi đến method tĩnh bên trong method tĩnh khác
        self::methodNghe();

        //
        echo "<br> SDT :" . self::$sodienthoai;
    }

    public function abc() {
        echo "<br>" . __METHOD__;

    }
}

class DienThoaiThongMinh extends DienThoaiCoDien {


}

// khởi tạo đối tượng qua từ khoá new và Class()
// có những trường hợp muốn gọi thuộc tính và method mà không cần khởi tạo đối tượng
// bên ngoài class muốn gọi thuộc tính hay
DienThoaiCoDien::methodNghe();
DienThoaiCoDien::methodGoi();