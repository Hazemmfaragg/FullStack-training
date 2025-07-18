<?php
 
?>


<!DOCTYPE html>
<html>
    <head >
    <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body class="bg-success">
        <div class="alert alert-danger" role="alert">
          Access Denied : Invalid Host
          <?php  echo " <br> IP :". $_SERVER['REMOTE_ADDR'] ." <br> REQUEST_METHOD : ".$_SERVER['REQUEST_METHOD'] ; ?>
        </div>
        
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>