<?php
/**
 * File-name : PHP_Project/data.php
 * Created at : 12/15/2022
 * @detail : responsible for saving data
 * Last Updated by : Surya Pratap Singh <surya.pratap@ucertify.com>
 * last Updated Date : 12/19/2022
 */
$que = $_POST['questionNo'];
$ans = $_POST['choice'];
$old = file_get_contents('answer.json');
$array = json_decode($old);
$array = json_decode(json_encode($array), true);
echo "<br>";
if($ans !=-1)
$array[0][$que] = $ans; 
$name = "answer";
$file_name = $name . '.json';
file_put_contents("$file_name", json_encode($array));
?>