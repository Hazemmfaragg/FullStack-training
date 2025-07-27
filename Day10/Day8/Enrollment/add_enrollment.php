 <?php
include "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : "";
    $course_id = isset($_POST['course_id']) ? $_POST['course_id'] : "";
    $grade = isset($_POST['grade']) ? $_POST['grade'] : "";


    $q = "INSERT INTO enrollments (student_id,course_id ,grade) VALUES ('$student_id','$course_id','$grade')";
    $res = mysqli_query($conn, $q);

    if ($res) {
        header("Location: enrollment.php");
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
    <title>Add Enrollment</title>
</head>

<body>
    <?php include "../nav.php" ; ?>
    <div class="container mt-5">



    <div class=" row d-flex justify-content-center">
            <div class="col-6 bg-white rounded-4">
                <h1 class="mb-4 text-center"><i>ADD ENROLLMENT</i></h1>
                
                <form method="post" >
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <h6><label for="validationServer01" class="form-label mb-1"><i>Student Name</i></label></h6>
                            <select class="form-select" name="student_id" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <?php
                                $students = mysqli_query($conn, "SELECT id, name FROM students");
                                while ($row = mysqli_fetch_assoc($students)) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <h6><label for="validationServer01" class="form-label mb-1"><i>Course Title</i></label></h6>
                            <select class="form-select" name="course_id" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <?php
                                $courses = mysqli_query($conn, "SELECT id, title FROM courses");
                                while ($row = mysqli_fetch_assoc($courses)) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['title'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <select class="form-select" name="grade" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">c</option>
                            </select>
                        </div>


                        <div class="col-12 ">
                            <button class="btn btn-success w-100 mb-3 mt-3" type="submit">Enroll Course</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>



