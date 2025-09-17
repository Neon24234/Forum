<?php
$file = 'lista.json';
if (file_exists($file)){
    $jsondata = file_get_contents($file);
    $data = json_decode($jsondata);
} else {
    $data = [];
}

array_push($data, $_POST['topic']);

$jsondata = json_encode($data);

file_put_contents($file, $jsondata);

include('index.php');
?>