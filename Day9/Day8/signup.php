<?php
include "db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name1 = isset($_POST['name']) ? $_POST['name'] : "";
    $email1 = isset($_POST['email']) ? $_POST['email'] : "";
    $pass1 = isset($_POST['pass']) ? $_POST['pass'] : "";
    

    
    $select = "SELECT * FROM admin WHERE email='$email1'";
    $result = mysqli_query($conn, $select);
    $rows = mysqli_num_rows($result);

    if ($rows == 0) {
        
        $pass1 = password_hash($pass1, PASSWORD_DEFAULT);

        
        $insert = "INSERT INTO admin (name, email, password)
                   VALUES ('$name1', '$email1', '$pass1')";
        $result2 = mysqli_query($conn, $insert);

        $_SESSION['name']=$name1;
        $_SESSION['role']="user";
        
        header("Location: /session/Day9/Day8/index.php");
        exit;

    } else {
        
        header("Location: /session/Day9/Day8/login1.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Sign Up Page</title>
</head>
<body class="p-3 bg-dark text-white">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 rounded-3 mt-5 p-5 shadow bg-dark">
                
                <form method="post">
                    <h3 class="text-center mb-4">Sign Up</h3>

                    <div class="mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>

                    <div class="mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="mb-4">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Sign Up</button>
                </form>

            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
