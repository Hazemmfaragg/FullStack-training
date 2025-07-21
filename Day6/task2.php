<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
//$text ="aBad bad words is bad BAD";
$text=$_GET['text']??'';
echo "original : ". $text;
echo "<br>";
echo "length : ". strlen($text);
echo "<br>";
echo "Replaced hazem by *** : ". str_replace("hazem","***",strtolower($text));
echo "<br>";
echo "first 10 : ". substr($text,0,10);
echo "<br>";
echo "capital : ". ucfirst($text);
echo "<br>";
echo "All capital : ". strtoupper($text);
}
?>

