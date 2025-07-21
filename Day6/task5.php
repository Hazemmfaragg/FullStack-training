<?php
 $msg="";
session_start();

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
    <title>login page</title>
</head>

<body class=" p-3 bg-warning-subtle ">
    <div class="container">
        <div class=" row  justify-content-center">
            <div class="col-6 bg-white p-4 shadow rounded text-center">
                <?php if (isset($_POST["btn"])):?>
                  
                    <div class="alert alert-<?php echo $color ; ?>" role="alert">
                    <?php echo $msg; ?>
                    </div>
                    
                <?php else: ?>
               <form method="POST" enctype="multipart/form-data" class="p-3">
                <div class=" input-group">
                <input class="form-control" type="file" multiple name="image" id="formFile">
                <button class="btn btn-primary " name="btn" >UPLOAD</button>
                </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>

