<?php

    require_once "connect.php";

    $id = isset($_GET["id"]) ? $_GET["id"] : 0;

    $sqlDelete = "DELETE FROM `students` WHERE `students`.`student_id` = :masv";


    try {

        $pre = $conn->prepare($sqlDelete);

        $pre->bindParam(":masv", $id, PDO::PARAM_INT);

        $num = $pre->execute();

        header("Location: list.php");

    } catch(PDOException $e) {
        echo "Xoá k thành công";
    }

