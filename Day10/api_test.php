<?php
header("Content-Type: application/json" );
header("Access-Control-Allow-Origin: *");



if($_SERVER["SERVER_NAME"] == "127.0.0.1"){
$data= [
        "data"=> [
            ["message" =>"Wronge Try To Get Data"]
        ],
        "connection"=>false,
        "message"=>"GO TO HELL"
      ];

      echo json_encode($data);
}
else{

$d=[
        "data"=> [
            [
                "name" =>"Hazem Farag",
                "age" =>30,
                "city" =>"sherbin"
            ],
            [
                "name" =>"aya",
                "age" =>21,
                "city" =>"mansoura"
            ]
        ],
        "connection"=>true,
        "message"=>"Data Reserved Successfully"
      ];
echo json_encode($d);

}


?>