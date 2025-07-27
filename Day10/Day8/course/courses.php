<?php include "../db.php";
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Courses</title>
</head>

<body>
    <?php include "../nav.php" ; ?>
    <div class="container mt-4">
    <h3>Course List </h3>
    <a href="add_course.php" class="btn btn-success mb-3">Add Course</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">hours</th>
      <th scope="col">price</th>
      <?php if ($role === "admin"): ?>
      <th scope="col">Actions</th>
      <?php endif; ?>
    </tr>
  </thead>
  <tbody>
    <?php
    $q="SELECT * FROM courses";
    $res=mysqli_query($conn,$q);
    while($row= mysqli_fetch_assoc($res)){
    echo"<tr>
      
      <td>{$row['title']}</td>
      <td>{$row['description']}</td>
      <td>{$row['hours']}</td>
      <td>{$row['price']}</td>";
      if ($role === "admin") {
      echo" <td>
      <a href='edit_course.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
      <a href='delete_course.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
      </td>";
      }
    echo "</tr>";
    } 
    ?>
    
  </tbody>
</table>
<h4 class="m-4 text-center">Courses via REST API</h4>
                <div class="row" id="coursesContainer"></div>
    </div>>
 <script>
    fetch("http://localhost/session/DAy10/Day8/course/get_course.php")
    .then(res => res.json())
    .then(data => {
        data.data.forEach(row => {
        document.getElementById("coursesContainer").innerHTML += `
            <div class="col-md-3 mb-3">
            <div class="card text-white bg-dark shadow">
                <div class="card-body">
                <h5 class="card-title">${row.title}</h5>
                <p class="card-text">Email:description: ${row.description}</p>
                <p class="card-text">Phone:hours: ${row.hours}</p>
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