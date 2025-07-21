<?php
$msg="";

if (isset($_GET['delete'])) {
    $target = $_GET['delete'];

    if (file_exists($target)) {
        unlink($target);
        $msg = "Delete The Image in Path: $target";
        $color = "success";
    } else {
        $msg = "File not found may be denied already: $target";
        $color = "warning";
    }
} else {
    $msg = "please send file name in url";
    $color = "danger";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
    <div class="container d-flex justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="alert alert-<?= $color ?> text-center">
                <?= $msg . ' ' ?><?= "<a href='task7-1.php' > go to images table </a>" ?>
            </div>
        </div>
    </div>
</body>
</html>