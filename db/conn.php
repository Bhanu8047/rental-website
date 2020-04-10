<?php 
$host = "localhost";
$user = "infra";
$pass = "admin";
$db = "rent";

$conn = mysqli_connect($host, $user, $pass, $db);
if($conn->connect_error){
    die("failed to connect");
}
?>