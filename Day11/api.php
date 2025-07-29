 <?php
 header("Content-Type:application/json");
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
 include 'student.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $data = json_decode(file_get_contents("php://input"), true);
 $student = new Student($data['name'], $data['email']);
 $student->activate();
 echo $student->toJson();
 }
