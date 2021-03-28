<?php
$subject= "hà nội thủ đô nước việt nam";
$pattern= "/hàn/i";

$result= preg_match($pattern,$subject);
var_dump($result);
?>