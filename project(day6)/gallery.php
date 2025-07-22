<?php
$images = [];


$folder='uploads/'.date("Y-m-d");

if ($folder) {
    $images = glob($folder . "/*.{jpg,png,jpeg}", GLOB_BRACE);
}

if (isset($_GET['delete'])) {
    $target = $_GET['delete'];

    if (file_exists($target)) {
        unlink($target);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    
}
}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Image Gallery</title>
</head>

<body>
    <?php include "nav.php" ; ?>
    <div class="container">
        <div class="col-md-12">
                <div class="row mt-4 d-flex">
                <h2>Gallery</h2>
                <table class="table table-white table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>name</th>
                            <th>Type </th>
                            <th>Size</th>
                            <th>actions</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php if (!empty($images)): ?>
                       <?php foreach($images as $x=>$y): ?>
                        <tr>
                            
                            <td><img src="<?= $y ?>"  style="width: 100px; height: auto;"></td>
                            <td><?= basename($y) ?></td>
                            <td><?= pathinfo($y, PATHINFO_EXTENSION) ?></td>
                            <td><?= filesize($y)?> bytes</td>
                            <td>
                                
                                <a href="?delete=<?= urlencode($y) ?>" class="btn btn-danger ">delete</a>
                            </td>

                        </tr>
                        <?php endforeach; ?> 
                        <?php else: ?>
                        <tr><td colspan="3">No images found</td></tr>
                       <?php endif ?>
                    </tbody>
                </table>
                <div >
                <a href="upload.php">Back to Upload </a>
                <span>|</span>
                <a href="login.php"> Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
