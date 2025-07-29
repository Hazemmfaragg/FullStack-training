<?php
$conn = mysqli_connect("localhost:3340","root","","training1");
if(!$conn){
    die("Connection failed:" .mysqli_connect_error());
}

$email = "aya@g.c";
$secured=mysqli_prepare($conn,"SELECT * FROM students where email = ?");
mysqli_stmt_bind_param($secured,"s",$email);
mysqli_stmt_execute($secured);
$result=mysqli_stmt_get_result($secured);


while($row = mysqli_fetch_assoc($result)){
    echo $row['name'] . "<br>";
}

?>