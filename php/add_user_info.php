<?php
include("connection.php");

$name = $_POST["fname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$query = $mysqli->prepare("INSERT INTO users(name, email, phone, message ) VALUES(?, ?, ?, ?)");
$query->bind_param("ssss", $name, $email, $phone, $message);
$query->execute();
// $rs = mysqli_query($mysqli, $query);
$response = [];
$response["success"] = true;

echo json_encode($response);
?>