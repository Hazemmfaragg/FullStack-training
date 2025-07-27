 <?php
include "../db.php";

$id = isset($_GET['id']) ? $_GET['id'] : 0;


$t = "SELECT * FROM enrollments WHERE id = $id";
$resl = mysqli_query($conn, $t);
$enrollments = mysqli_fetch_assoc($resl);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $course_id =  $_POST['course_id'];
    $grade =  $_POST['grade'];

    $q = "UPDATE enrollments 
          SET student_id='$student_id', course_id='$course_id', grade='$grade' 
          WHERE id=$id";


    $res = mysqli_query($conn, $q);


    if ($res) {
        header("Location: enrollment.php");
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
                <h1 class="mb-4 text-center"><i>Edit ENROLLMENT</i></h1>
                
                <form method="post" >
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <h6><label for="validationServer01" class="form-label mb-1"><i>Student Name</i></label></h6>
                            <select class="form-select" name="student_id" aria-label="Default select example">
                            
                            <?php
                               
                                $students = mysqli_query($conn, "SELECT id, name FROM students");
                                
                                while ($row = mysqli_fetch_assoc($students)) {
                                    $selected=($row['id']==$enrollments['student_id'])?"selected":"";
                                    echo "<option $selected value='". $row['id'] ."'>" . $row['name'] . "</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <h6><label for="validationServer01" class="form-label mb-1"><i>Course Title</i></label></h6>
                            <select class="form-select" name="course_id" aria-label="Default select example">
                            
                            <?php
                               
                                $courses = mysqli_query($conn, "SELECT id, title FROM courses");
                                
                                while ($row = mysqli_fetch_assoc($courses)) {
                                    $selected=($row['id']==$enrollments['course_id'])?"selected":"";
                                    echo "<option $selected value='". $row['id'] ."'>" . $row['title'] . "</option>";
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



