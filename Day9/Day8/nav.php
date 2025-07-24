<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 

$role = $_SESSION['role'] ;
$name =$_SESSION['name'] ;

?>

<nav class="navbar navbar-expand-lg  bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/session/Day9/Day8/index.php">WELCOME  <?php echo " ".strtoupper($name ." ".'('.$role.')' )?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/session/Day9/Day8/student/student.php">Student List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/session/Day9/Day8/course/courses.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/session/Day9/Day8/Enrollment/enrollment.php">Enrollment</a>
        </li>

        <li class="nav-item">
          <a class="btn btn-outline-light" href="/session/Day9/Day8/login1.php">Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>