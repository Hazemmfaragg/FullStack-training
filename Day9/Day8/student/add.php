 <?php
include "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
    $date = isset($_POST['date']) ? $_POST['date'] : "";

    $q = "INSERT INTO students (name, email, phone, date_of_birth) VALUES ('$name','$email','$phone','$date')";
    $res = mysqli_query($conn, $q);

    if ($res) {
        header("Location: student.php");
        exit;
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>student</title>
</head>

<body>
    <?php include "../nav.php" ; ?>
    <div class="container mt-4">
    <h3>add Student </h3>



    <div class=" row d-flex justify-content-center">
            <div class="col-6 bg-white rounded-4">
                
                <form method="post" >
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">USER INFORMATION</h1>
                            <label for="validationServer01" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control is-valid" id="validationServer01"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationServer01" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control is-valid" id="validationServer01" 
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationServer01" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control is-valid" id="validationServer01" 
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationServer01" class="form-label">Date Of Birth</label>
                            <input type="date" name="date" class="form-control is-valid" id="validationServer01" 
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>



                        <div class="col-12">
                            <button class="btn btn-primary w-100 mb-3 mt-3" type="submit">Submit form</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>



