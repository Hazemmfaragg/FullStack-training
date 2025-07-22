<?php
session_start();
$name=isset($_GET['name'])? $_GET['name'] :"";
$_SESSION["name"]=$name;


$pass=isset($_GET['pass'])? $_GET['pass'] :"";
$_SESSION["password"]=$pass;

$arr=[
    ['name'=>"admin" ,'pass'=>'123456'],
    ['name'=>"text" ,'pass'=>'test123']];


for($i=0;$i<count($arr);$i++){
    if($name==$arr[$i]['name']&&$pass==$arr[$i]['pass']){    
       
        header("Location: dashboard.php");
        exit();
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body class="p-3 bg-dark">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6 rounded-3 mt-5 p-5 shadow bg-dark">

                <?php if (!empty($name) || !empty($pass)): ?>
                    <div class="alert alert-danger text-center">
                        Wrong Name or Password
                    </div>
                <?php endif; ?>

                <form method="get">
                    <div class="mb-3">
                        <label class="form-label text-white">Name</label>
                        <input type="text" name="name" class="form-control is-valid">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Password</label>
                        <input type="password" name="pass" class="form-control is-valid">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
