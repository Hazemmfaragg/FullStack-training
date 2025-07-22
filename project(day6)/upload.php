<?php
 $msg="";

if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_FILES['image']))
{
$folder='uploads/'.date("Y-m-d");
$_SESSION['folder']=$folder;
if(!file_exists($folder))
    {mkdir($folder,0777,true);}

$name=basename($_FILES['image']['name']);

$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
$newname=uniqid("img_",true).".". $ext;
$target = $folder . "/" . $newname;

$allowed = ["image/jpeg", "image/jpg", "image/png"];
$typ=$_FILES['image']['type'];

$tmp=$_FILES['image']['tmp_name'];
if(in_array($typ,$allowed)){
 
    move_uploaded_file($tmp, $target);
    $color="success";
    $msg="Uploaded to $target";
}
else{
    
    $color="danger";
    $msg="invalid type of image cheack it out";
}
}



?>





<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>dashboard</title>
</head>

<body>
    <?php include "nav.php" ; ?>
    <div class="container mt-5">
        <div class=" row  ">
            <div class="col-12 bg-white p-4  rounded ">
                <h2>Upload Image</h2>
                <?php if (isset($_POST["btn"])):?>
                  
                    <div class="alert alert-<?php echo $color ; ?>" role="alert">
                    <?php echo"Image Uploaded." ?>
                    </div>
                    
                <?php endif; ?>

                
               <form method="POST" enctype="multipart/form-data" >
                
                <div class=" input-group">
                <input class="form-control" type="file" multiple name="image" id="formFile">
                
                <select class="form-select" aria-label="Default select example" >
                <option selected>choose file</option>
                <option value="1">Avatar</option>
                <option value="2">Product</option>
                </select>
                <button class="btn btn-primary " type="submit" name="btn" >UPLOAD</button>
                </div>
                
                
            </div>
        </div>
        <div class="ms-4 " >
                <a href="gallery.php">View Gallery </a>
                <span>|</span>
                <a href="login.php"> Logout</a>
                </div>
    </div>
    



    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>











