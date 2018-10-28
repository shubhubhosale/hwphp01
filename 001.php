<?php

require ('003.php');

// $url = 'http://server.com/path';
$url = 'http://192.168.43.237/002.php'; 
$data = array('firstNumber' => '2', 'secondNumber' => '3');

$MyPostRequestClassObject = new MyPostRequestClass();

$result = $MyPostRequestClassObject->MyPostRequestFunction($url,$data);

echo $result;

// var_dump($result);

?>