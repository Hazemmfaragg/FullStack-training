<?php 
include "../db.php";
session_start();


?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>student</title>
</head>

<body>
    <?php include "../nav.php"; ?>
    <div class="container mt-4">
        <h3>Student List</h3>
        <?php if ($role === "admin"): ?>
        <a href="add.php" class="btn btn-success mb-3">Add Student</a>
        <?php endif  ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                    <?php if ($role === "admin"): ?>
                        <th scope="col">Actions</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $q = "SELECT * FROM students";
                $res = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['phone']}</td>";
                    echo "<td>{$row['date_of_birth']}</td>";
                    if ($role === "admin") {
                        echo "<td>
                                <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                              </td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
