<?php
    $conn =new mysqli("localhost:3340","root","","training1");
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

$email="aya@g.c"; 
$smt = $conn->prepare("SELECT * FROM students where email = ?");
$smt->bind_param("s",$email);
$smt->execute();
$result=$smt->get_result();
    while($row = $result->fetch_assoc()){
        echo $row['name'] . "<br>";
    }

    ?>