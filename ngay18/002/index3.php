<?php
    $t1 = mktime(23,15,05,3,12,2008);
    //timestamp là số giây tính từ 00:00:00 1/1/1970
    //1205360105

    echo $t1;

    //$t1 là timestamp chúng ta về dạng cho người đọc được
    echo "<br>";
    echo date("H:i:s d/m/Y", $t1);

    //thời gian có 2 loại c
    //loại một cho người đọc được dùng để hiển thị
    //loại 2 timestamp dùng để tính toán