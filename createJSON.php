<?php
$n = $_POST['NumberOfQuestion'];
$data = file_get_contents('answer.json');
$json = json_decode($data);
$json = null;
file_put_contents('answer.json', $json);
$array = array();
$json = json_encode($array);
file_put_contents('answer.json', $json);

?>