<?php
$images = [];


$folder='uploads/'.date("Y-m-d");

if ($folder) {
    $images = glob($folder . "/*.{jpg,png,jpeg}", GLOB_BRACE);
}



?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Upload Log</title>
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
                            <th>Date</th>
                            <th>user</th>
                            <th>Type </th>
                            <th>path</th>
                            <th>MIME</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php if (!empty($images)): ?>
                       <?php foreach($images as $x=>$y): ?>
                        <tr>
                            
                            <td><?=date("Y-m-d h:i")?></td>
                            <td><?= $name ?></td>
                            <td><?= filesize($y)?> bytes</td>
                            <td><?= $y ?></td>
                            
                            <td>
                                image/<?= strtolower(pathinfo(basename($y), PATHINFO_EXTENSION))?>
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
