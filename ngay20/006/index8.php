<?php

// ứng dụng của try catch
// dự đoán lỗi và ngoại lệ để chử động ném ra ngoại lệ
// khi code thực thi chúng ta dùng try catch để bắt ngoại lệ
// nếu ngoại lệ xảy ra thì ok chạy bình thường
// ngoại lệ xảy ra thì chúng ta sẽ đưa ra 1 hành động khác phù hợp


// kết nối CSDL abc
// bình thường máy chủ CSDL abc hoạt động => chạy ok
// nếu quá tải try cập không connect được CSDL abc => gọi đến CSDL dự phòng
// hoặc chuyển hướng sanng trang bảo trì hệ thống

// development => bật thông báo lỗi
// producttion => ẩn hết lỗi đi