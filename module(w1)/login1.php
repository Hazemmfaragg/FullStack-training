<?php
session_start();
$email=isset($_GET['email'])? $_GET['email'] :"";
$_SESSION["email"]=$email;


$pass=isset($_GET['pass'])? $_GET['pass'] :"";
$_SESSION["password"]=$pass;

$arr=[
    ['email'=>"admin@example.com" ,'pass'=>'123456'],
    ['email'=>"text@example.com" ,'pass'=>'test123']];

$x=0;

for($i=0;$i<count($arr);$i++){
    if($email==$arr[$i]['email']&&$pass==$arr[$i]['pass']){    
        $x=1;   
        break;
    }
}
  

?>


<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>login page</title>
</head>

<body class=" p-3 bg-dark ">
    <div class="container ">
        <div class=" row d-flex justify-content-center ">
            <div class="col-6  rounded-3 mt-5 p-5 shadow bg-dark">
            <?php if($x==1): ?>
            <div class="alert alert-success" role="alert">
                 WELCOME, Admin (Admin)
            </div>
            <div class="d-flex gap-1 justify-content-between ">
            <a href="login1.php" type="submit" class="btn btn-primary col-3 p-2 text-center">Logout</a>
            <a href="products.php"  type="submit" class="btn btn-primary col-4 p-2 text-center">products</a>
            <a href="signup.php" type="submit" class="btn btn-primary col-4 p-2 text-center">create account</a>  
            </div>
            <?php elseif(!empty($email)||!empty($pass)): ?>
                <div class="alert alert-danger text-center">
                 Wronge Email or password  
                 </div>

                <form method="get">
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                     <input type="email" name="email" class="form-control is-valid " id="exampleInputEmail1" aria-describedby="emailHelp" >
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                       <input type="password" name="pass" class="form-control is-valid" id="exampleInputPassword1">
                  </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <h6 style="color:grey;" class=" text-center mt-3">admin@example.com / 123456</h6>
                <h6 style="color:grey;" class=" text-center">text@example.com / test123</h6>
              </form>

            <?php else: ?>
            <form method="get">
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                     <input type="email" name="email" class="form-control is-valid " id="exampleInputEmail1" aria-describedby="emailHelp" >
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                       <input type="password" name="pass" class="form-control is-valid" id="exampleInputPassword1">
                  </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <h6 style="color:grey;" class=" text-center mt-3">admin@example.com / 123456</h6>
                <h6 style="color:grey;" class=" text-center">text@example.com / test123</h6>
              </form>
              <?php endif; ?>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>