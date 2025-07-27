<?php include "../db.php";
session_start();
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
    <h3>Enrollment</h3>
    <a href="add_enrollment.php" class="btn btn-success mb-3">+add enrollment</a>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">title</th>
      <th scope="col">grade</th>
      <th scope="col">enrollment date</th>
      <?php if ($role === "admin"): ?>
      <th scope="col">Actions</th>
      <?php endif?>
    </tr>
    </thead>
    <tbody>
    <?php
    $q="SELECT enrollments.id , students.name , courses.title , enrollments.grade , enrollments.enrollment_date 
    FROM enrollments 
    JOIN students ON enrollments.student_id = students.id 
    JOIN courses ON enrollments.course_id = courses.id";
    $res=mysqli_query($conn,$q);
    while($row= mysqli_fetch_assoc($res)){
    echo"<tr>
      
      <td>{$row['name']}</td>
      <td>{$row['title']}</td>
      <td>{$row['grade']}</td>
      <td>{$row['enrollment_date']}</td>";
      if ($role === "admin"){ 
      echo "<td>
      <a href='edit_enrollment.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
      <a href='delete_enrollment.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
      </td>";
      }
    echo "</tr>";
      }

     
    ?>
    
  </tbody>
</table>
 <h4 class="text-center m-4"><i>Enrollments via REST API</i></h4>
                <div class="row" id="enrollmentsContainer"></div>
 <script>
    fetch("http://localhost/session/Day10/Day8/enrollment/get_enrollment.php")
    .then(res => res.json())
    .then(data => {
        data.data.forEach(row => {
        document.getElementById("enrollmentsContainer").innerHTML += `
            <div class="col-md-3 mb-3">
            <div class="card text-white bg-dark shadow">
                <div class="card-body">
                <h5 class="card-title">Student:<b> ${row.name}</b> Enrolled in course<b> ${row.title}</b></h5>
                <p class="card-text">Description: ${row.description}</p>
                <p class="card-text">hours: ${row.hours}</p>
                <p class="card-text">Date: ${row.enrollment_date}</p>
                </div>
            </div>
            </div>
        `;
        });
    });
    </script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>