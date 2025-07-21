<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST["add_user"]))
    $_SESSION["users"][] = [
        "name" => $_POST["name"],
        "email" =>$_POST["email"]
    ];

if(isset($_POST["clear_session"])){
    $_SESSION["users"] = [];
}
if(isset($_POST["pop_session"])){
   array_pop($_SESSION["users"]);
}
}
?>


<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>login page</title>
</head>

<body class=" p-3 bg-warning-subtle ">
    <div class="container">
        <div class=" row d-flex justify-content-center">
            <div class="col-6 bg-white rounded-4">
                
                <form  method="post" >
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control is-valid" id="validationServer01"
                                 placeholder="name">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationServer01" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control is-valid" id="validationServer01" 
                                >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-12">
                            <button class="btn btn-primary w-100 mb-3 mt-3" type="submit" name="add_user">Submit form</button>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-primary w-100 mb-3 mt-3" type="submit" name="clear_session">Clear session</button>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-primary w-100 mb-3 mt-3" type="submit" name="pop_session">Remove last</button>
                        </div>


                    </div>
                </form>


                <table class="table table-bordered">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_SESSION["users"])): ?>
                            <?php foreach ($_SESSION["users"] as $user): ?>
                                <tr>
                                    <td><?= $user["name"] ?></td>
                                    <td><?= $user["email"]?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="3" class="text-center">No users yet.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>