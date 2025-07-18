<?php
 
if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_FILES['image']))
{
$name=$_FILES['image']['name'];
$ext=(explode('.',$name)[count(explode('.',$name))-1]);

$typ=(explode('/',$_FILES['image']["type"])[0]);
$allowed=["jpg","png"];
$tmp=$_FILES['image']['tmp_name'];
if(in_array($ext,$allowed)){
    if($typ === "image"){
        move_uploaded_file($tmp,"upload/$name");
    }
    else{
        echo '<div class="alert alert-primary" role="alert">
       the type not allowed
     </div>';
    }
}
else{
    echo '<div class="alert alert-primary" role="alert">
  this extention not allowed
</div>';
}




}



?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>login page</title>
</head>

<body class=" p-3 bg-warning-subtle ">
    <div class="container">
        <div class=" row  justify-content-center">
            <div class="col-6 bg-white p-4 shadow rounded text-center">
               <form method="POST" enctype="multipart/form-data" class="p-3">
                <div class="mb-3">
                <label for="formFile" class="form-label">UPLOAD</label>
                <input class="form-control" type="file" multiple name="image" id="formFile">
                <button class="btn btn-primary mt-4" >UPLOAD</button>
                </div>

                </form>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>

