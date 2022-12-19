<?php
/**
 * File-name : PHP_Project/createJSON.php
 * Created at : 12/15/2022
 * @detail : responsible for creating a empty answer file
 * Last Updated by : Surya Pratap Singh <surya.pratap@ucertify.com>
 * last Updated Date : 12/19/2022
 */
$n = $_POST['NumberOfQuestion'];
$data = file_get_contents('answer.json');
$json = json_decode($data);
$json = null;
file_put_contents('answer.json', $json);
$array = array();
$json = json_encode($array);
file_put_contents('answer.json', $json);

?>