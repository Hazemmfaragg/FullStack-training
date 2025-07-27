 <?php
include "../db.php";

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$q = "SELECT * FROM students WHERE id = $id";
$resl = mysqli_query($conn, $q);
$student = mysqli_fetch_assoc($resl);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $q = "UPDATE students 
          SET name='$name', email='$email', phone='$phone', date_of_birth='$date' 
          WHERE id=$id";
    $res = mysqli_query($conn, $q);

    if ($res) {
        header("Location: student.php");
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
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="<?= $student['name'] ?>" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="<?= $student['email'] ?>" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" value="<?= $student['phone'] ?>" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="date" value="<?= $student['date_of_birth'] ?>" class="form-control" required>
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



