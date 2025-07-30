<?php
header("Content-type:application/json");
include 'db.php';

if(isset($_GET['id']) && ($_GET['id']!= ''  )) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM courses WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $arr=[];
         while($row = mysqli_fetch_assoc($result)) {
           $arr[] = $row;
        }   
       
            echo json_encode($arr);
            }

     else {
         $sql = "SELECT * FROM courses";
         $result = mysqli_query($conn, $sql);
    
           while($row = mysqli_fetch_assoc($result)) {
               $arr[] = $row;
           }
              echo json_encode($arr);
     }

?>