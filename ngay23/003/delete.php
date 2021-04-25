<?php

require_once "conn.php";
$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$sqlDelete = "DELETE FROM producs WHERE product_id=$id";
//echo $sqlDelete;
$resultDelete = $conn->exec($sqlDelete);
//var_dump($resultInsert);
header("Location: list.php");
exit();
//