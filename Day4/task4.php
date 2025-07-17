<?php
$arr =[["name"=>"laptop","Price"=>15000 ,"Qauntity"=>3],
        ["name"=>"phone","Price"=>8000 ,"Qauntity"=>5],
        ["name"=>"tablet","Price"=>6000 ,"Qauntity"=>2]
];

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
                
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">Qauntity</th>
                </tr>
            </thead>
           
            <tbody >
               
                    
    <?php foreach ($arr as $k=> $info) : ?>
        <?php if($info['Price']>=8000):?>
      <?php if($k==1){
        echo "<tr>";
      } 
      else {
       echo ' <tr class="table-light">';
      }?>           
        <td><?= $info['name'] ?></td>
        <td><?= $info['Price'] ?></td>
        <td><?= $info['Qauntity']?></td>
        </tr>
    <?php endif; ?>
    <?php    endforeach;
    ?>

              
            </tbody>
            </table>
            </div>
        </div>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>