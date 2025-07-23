<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Front Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-white">
    <?php include "nav.php"; ?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-center">
                <div class="card shadow  text-bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <?php
                        $Count = mysqli_query($conn, "SELECT COUNT(*) AS count FROM students");
                        $studentCount = mysqli_fetch_assoc($Count);
                        echo " <p class='card-text'>Total Students: " . $studentCount['count'] . "</p>";
                        ?>
                        <a href="student/student.php" class="btn btn-danger">View Students</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow  text-bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Courses</h5>
                        <?php
                        $course_Count = mysqli_query($conn," SELECT COUNT(*) AS count FROM courses");
                        $courseCount = mysqli_fetch_assoc($course_Count);
                        echo " <p class='card-text'>Total Courses: " . $courseCount['count'] . "</p>";
                        ?>
                        <a href="course/courses.php" class="btn btn-success">View Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow  text-bg-dark">
                    <div class="card-body ">
                        <h5 class="card-title">Enrollments</h5>
                        <?php
                        $enrollment_Count = mysqli_query($conn," SELECT COUNT(*) AS count FROM enrollments");
                        $enrollmentCount = mysqli_fetch_assoc($enrollment_Count);
                        echo "<p class='card-text'>Total Enrollments: " . $enrollmentCount['count'] . "</p>";
                        ?>
                        <a href="Enrollment/enrollment.php" class="btn btn-info">View Enrollments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>