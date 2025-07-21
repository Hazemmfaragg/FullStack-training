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

<body class="p-3 bg-dark">
    <div class="container">
        <div class="col-md-12">
                <div class="row mt-4 d-flex justify-content-center">
                
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>image path</th>
                            <th>actions</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php if (!empty($images)): ?>
                       <?php foreach($images as $x=>$y): ?>
                        <tr>
                            <td><?=($x+1)?></td>
                            <td><?=$y?></td>
                            <td>
                                
                                <a href="task7-2.php?delete=<?= urlencode($y) ?>" class="btn btn-danger ">delete</a>
                            </td>

                        </tr>
                        <?php endforeach; ?> 
                        <?php else: ?>
                        <tr><td colspan="3">No images found</td></tr>
                       <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
