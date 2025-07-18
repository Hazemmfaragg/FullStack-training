<?php
 
?>


<!DOCTYPE html>
<html>
    <head >
    <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body class="bg-success">
        <div class="container">
            <div class="row mt-4">
                <table class="table">
            <thead class="table-dark">
                <tr>
                
                <th scope="col">key</th>
                <th scope="col">value</th>
                </tr>
            </thead>
           
            <tbody >
        


           <tr>
        <td>PHP_SELF</td>
        <td><?= $_SERVER['PHP_SELF']?></td>
        </tr>

        <tr>
            <td>HTTP_HOST</td>
        <td><?= $_SERVER['HTTP_HOST']?></td>
        </tr>

        <tr>
            <td>USER_AGENT</td>
        <td><?= $_SERVER['HTTP_USER_AGENT']?></td>
        </tr>
        <tr>
            <td>REQUEST_METHOD</td>
        <td><?= $_SERVER['REQUEST_METHOD']?></td>
        </tr>
    

              
            </tbody>
            </table>
            </div>
        </div>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>