<?php
setcookie("product","dien thoai sam sung note7", time() + 86400, "/");
setcookie("listproduct",json_encode(["dien thoai sam sung note7", "xiaomi"]), time() + 86400, "/");

print_r($_COOKIE);

echo "<br>" . $_COOKIE;