<?php

include "../db.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$q = "SELECT * FROM students";
$res = mysqli_query($conn, $q);

$data = [];
while ($row = mysqli_fetch_assoc($res)) {
    $data[] = $row;
}

echo json_encode([
    "status" => "success",
    "data" => $data
], JSON_PRETTY_PRINT);

?>