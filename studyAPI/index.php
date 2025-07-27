<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$conn = mysqli_connect("localhost:3340","root","","test123");
if(!$conn){
    die(json_encode([
        "status" => "error",
        "message" => "Connection failed: " . mysqli_connect_error()
    ]));
}
$q="SELECT * FROM admin";
$do=mysqli_query($conn,$q);
$arr= [];

if(isset($_GET['pass'])){
if($_GET['pass']=="123"){
    while($fet=mysqli_fetch_assoc($do)){
    $arr[]=$fet;
    }
    echo json_encode([
        "status" => "success",
        "data" => $arr
    ], JSON_PRETTY_PRINT);
}
else{
    echo json_encode(["error"=>"wronge pass"]);
}
}
else{
    echo json_encode(["error"=>"pass required"]);
}


?>