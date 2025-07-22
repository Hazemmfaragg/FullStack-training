<?php
session_start();
$name=isset($_SESSION["name"])? $_SESSION["name"] :"";
 ?>


<nav class="navbar navbar-expand-lg bg-dark p-3"  data-bs-theme="dark"> 
  <div class="container-fluid  ">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="upload.php">Upload Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="image_table.php">Image Log Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login_table.php">Login Log Table</a>
        </li>
      </ul>
        

    </div>
    
        <p class="text-white "> Welcome <?php echo $name; ?>! |</p> 
        <a class="btn btn-outline-light border-white" href="login.php">logout</a>
      
  </div>
</nav>