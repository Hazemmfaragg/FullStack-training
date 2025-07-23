 <?php
 include "../db.php";

$id = isset($_GET['id']) ? $_GET['id'] : 0;

    $q = "DELETE FROM enrollments WHERE id='$id'";
    $res = mysqli_query($conn, $q);

    if ($res) {
        header("Location: enrollment.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

   ?>