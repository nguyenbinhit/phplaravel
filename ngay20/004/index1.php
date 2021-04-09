<?php

// file index1.php này không khai báo namespace
// nên nó thuộc global namespace
include_once "app/controller/admin/report/ReportController.php";
// khi mà gọi từ global namespace gọi đến namespace cụ thể thêm \ trước tên namespace kia
$reprot = new \App\Controller\Admin\Report\ReportController();