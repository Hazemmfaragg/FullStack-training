 <?php
include "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $hours = isset($_POST['hours']) ? $_POST['hours'] : "";
    $price = isset($_POST['price']) ? $_POST['price'] : "";

    $q = "INSERT INTO courses (title,description,hours, price) VALUES ('$title','$description','$hours','$price')";
    $res = mysqli_query($conn, $q);

    if ($res) {
        header("Location: courses.php");
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
                            <h1 class="text-center">title</h1>
                            <label for="validationServer01" class="form-label">title</label>
                            <input type="text" name="title" class="form-control is-valid" id="validationServer01"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationServer01" class="form-label">description</label>
                            <input type="text" name="description" class="form-control is-valid" id="validationServer01" 
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationServer01" class="form-label">hours</label>
                            <input type="number" step="any" name="hours" class="form-control is-valid" id="validationServer01" 
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationServer01" class="form-label">price</label>
                            <input type="number" step="any" name="price" class="form-control is-valid" id="validationServer01" 
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



