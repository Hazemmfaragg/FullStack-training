<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


$input = file_get_contents("php://input");
$data = json_decode($input, true);


$username = $data["username"] ?? "unknown";
$age = $data["age"] ?? "not provided";


$response = [
    "status" => "success",
    "message" => "Data received",
    "data" => [
        "username" => $username,
        "age" => $age
    ]
];


echo json_encode($response, JSON_PRETTY_PRINT);
?>
