<?php
if(isset($_POST["submit"])){
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email_address = $_POST["email_address"];
$sex = $_POST["sex"];
$dob = $_POST["dob"];
$username = $_POST["username"];
$password = $_POST["password"];

 echo $first_name . $last_name . $email_address . $sex . $dob . $username . $password;

$log_data = [
    "first_name" => "$first_name",
    "last_name" => "$last_name",
    "email_address" => "$email_address",
    "sex" => "$sex",
    "dob" => "$dob",
    "username" => "$username",
    "password" => "$password"
];

file_put_contents("task/". $log_data["username"] . ".txt" , json_encode($log_data));





}
?>