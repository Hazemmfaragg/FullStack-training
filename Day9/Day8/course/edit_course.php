 <?php
include "../db.php";

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$t = "SELECT * FROM courses WHERE id = $id";
$resl = mysqli_query($conn, $t);
$courses = mysqli_fetch_assoc($resl);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description =  $_POST['description'];
    $hours =  $_POST['hours'];
    $price =  $_POST['price'];

    $q = "UPDATE courses 
          SET title='$title', description='$description', hours='$hours', price='$price' 
          WHERE id=$id";
    $res = mysqli_query($conn, $q);
    
    if ($res) {
        header("Location: courses.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
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
    <h3>Edit Student </h3>



    <div class=" row d-flex justify-content-center">
            <div class="col-6 bg-white rounded-4">
                
                <form method="post">
                <div class="col-md-12">
                    <label class="form-label">title</label>
                    <input type="text" name="title" value="<?= $courses['title'] ?>" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" value="<?= $courses['description'] ?>" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">hours</label>
                    <input type="number"  step="any"  name="hours" value="<?= $courses['hours'] ?>" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Date of Birth</label>
                    <input type="number"  step="any" name="price" value="<?= $courses['price'] ?>" class="form-control" required>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary w-100 mt-3" type="submit">Update Student</button>
                </div>
            </form>
            </div>
        </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>



