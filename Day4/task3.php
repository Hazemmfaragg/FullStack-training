<?php
$arr = ["name"=>"hazem","age" =>22,"Email"=>"7azem.farag.15@gmail.com","city"=>"mansoura"];

?>

<!DOCTYPE html>
<html>
    <head >
    <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body class="bg-success">
        <div class="container mt-5">
            <ul class="list-group">
                <?php foreach($arr as $k => $x ):  ?>
                <li class="list-group-item">
                   <strong> <?= $k ?> </strong> : <?= $x ?> 
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>