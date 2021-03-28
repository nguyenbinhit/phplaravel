<?php
$subject= "hà nội thủ đô nước việt nam. việt nam có trên 90 triệu dân. việt nam nằm trong khí hậu nhiệt đới";
$pattern= "/hàn/i";

$result= preg_match_all($pattern,$subject);
var_dump($result);


// preg_match($pattern,$subject) trẩ về số 1 nếu $pattern tìm thấy trong $subject
// preg_match_all($pattern,$subject) trẩ về số lần nếu $pattern tìm thấy trong $subject
?>


