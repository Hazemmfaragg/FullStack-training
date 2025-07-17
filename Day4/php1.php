<?php
 $arr =[
   "user1"=>[ ["name"=>"hazem","age" =>22]],
     "user2"=>[ ["name"=>"aya","age"=>21]]
    ];
echo $arr["user2"][0]["name"];

$color =["red","green","yellow"];
foreach ($color as $x) {
    echo $x ."<br>";
}
 $arr =[
    ["name"=>"hazem","age" =>22],
    ["name"=>"aya","age"=>21]
    ];
foreach ($arr as $k =>$x) {
    echo $k ." is : ".$x['name']. " ".$x['age']."<br>"  ;
}
$arr =
    ["name"=>"hazem","age" =>22];
    foreach($arr as $k=>$x){
        echo $k."<br>";
    }
?>