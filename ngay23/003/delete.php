<?php

require_once "conn.php";

$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$sqlDelete = "DELETE FROM producs WHERE product_id=$id";
$resultDelete = $connection->exec($sqlDelete);
header("Location: list.php");
exit();

