<?php

require_once "connect.php";

echo "<pre>";
print_r($connection);
echo "</pre>";

$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$sqlDelete = "DELETE FROM students WHERE student_id=$id";
//echo $sqlDelete;
$resultDelete = $connection->exec($sqlDelete);
//var_dump($resultInsert);
header("Location: list.php");
exit();
//
//    require_once "connect.php";
//
//    $id = isset($_GET["id"]) ? $_GET["id"] : 0;
//
//    $sqlDelete = "DELETE FROM `students` WHERE `students`.`student_id` = :masv";
//
//
//    try {
//
//        $pre = $conn->prepare($sqlDelete);
//
//        $pre->bindParam(":masv", $id, PDO::PARAM_INT);
//
//        $num = $pre->execute();
//
//        header("Location: list.php"); exit();
//
//    } catch(PDOException $e) {
//        echo "Xoá k thành công";
//    }

