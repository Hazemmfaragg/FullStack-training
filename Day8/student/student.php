<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>student</title>
</head>

<body>
    <?php include "../nav.php" ; ?>
    <div class="container mt-4">
    <h3>Student List </h3>
    <a href="add.php" class="btn btn-success mb-3">add student</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">DOB</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $q="SELECT * FROM students";
    $res=mysqli_query($conn,$q);
    while($row= mysqli_fetch_assoc($res)){
    echo"<tr>
      
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['phone']}</td>
      <td>{$row['date_of_birth']}</td>
      <td>
      <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
      <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
      </td>
    </tr>";
    } 
    ?>
    
  </tbody>
</table>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>