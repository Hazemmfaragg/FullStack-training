<?php
$conn = mysqli_connect("localhost:3340", "root", "", "test123");

if (!$conn) {
    die(json_encode([
        "status" => "error",
        "message" => "Connection failed: " . mysqli_connect_error()
    ]));
}

// استقبال البيانات
$input = file_get_contents("php://input");
$data = json_decode($input, true);

$name  = $data["name"] ?? "";
$email = $data["email"] ?? "";
$pass  = $data["pass"] ?? "";

// الخطوة 1: كتابة الاستعلام باستخدام ? placeholders
$sql = "INSERT INTO admin (name, email, password) VALUES (?, ?, ?)";

// الخطوة 2: تجهيز الاستعلام
$stmt = mysqli_prepare($conn, $sql);

// الخطوة 3: ربط القيم مع placeholders
// "s" معناها String, فيه 3 متغيرات كلهم نصوص → "sss"
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $pass);

// الخطوة 4: تنفيذ الاستعلام
$success = mysqli_stmt_execute($stmt);

if ($success) {
    echo json_encode(["status" => "success", "message" => "User inserted"]);
} else {
    echo json_encode(["status" => "error", "message" => "Insert failed"]);
}
?>
