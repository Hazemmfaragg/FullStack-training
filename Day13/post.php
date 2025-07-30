<?php
header('Content-Type: application/json');
include 'db.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);
if(!isset($data['title']) && !isset($data['description']) && !isset($data['hours']) && !isset($data['price'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
    exit;
}
if(empty($data['title']) || empty($data['description']) || empty($data['hours']) || empty($data['price'])) {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
    exit;
}
$title = $data['title'];
$description = $data['description'];
$hours = $data['hours'];
$price = $data['price'];

$select="SELECT * FROM courses WHERE title = '$title' and description = '$description'";
if(mysqli_num_rows(mysqli_query($conn, $select)) > 0) {
    echo json_encode(['status' => 'error', 'message' => 'Course already exists']);
    exit;
}
$sql = "INSERT INTO courses (title, description, hours, price) VALUES ('$title', '$description', '$hours', '$price')";
if (mysqli_query($conn, $sql)) {
    echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to insert data']);
}

?>