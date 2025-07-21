<?php
$images = [];
session_start();

$path = isset($_SESSION['folder']) ? $_SESSION['folder'] : '';

if ($path) {
    $images = glob($path . "/*.{jpg,png,jpeg}", GLOB_BRACE);
}
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Image Gallery</title>
</head>

<body class="p-3 bg-warning-subtle">
    <div class="container">
        <div class="col-md-12">
                <div class="row mt-4 d-flex justify-content-center">
                <?php if (!empty($images)): ?>
                    <?php foreach ($images as $x): ?>
                         <div class="col-md-3 mb-3 p-4" >
                        <img src="<?= $x ?>" class="img-fluid rounded  mb-2">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-info">No images found in this session folder.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
