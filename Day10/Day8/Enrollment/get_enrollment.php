<?php

include "../db.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$q = "SELECT enrollments.id , students.name , courses.title ,courses.hours, enrollments.grade , enrollments.enrollment_date 
    FROM enrollments 
    JOIN students ON enrollments.student_id = students.id 
    JOIN courses ON enrollments.course_id = courses.id";
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