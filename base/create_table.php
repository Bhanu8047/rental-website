<?php
$servername = "localhost";
$username = "infra";
$password = "admin";
$dbname = "rent";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE TABLE apartment (
ID INT(6) UNSIGNED AUTO_INCREMENT UNIQUE ,
APARTMENT_NAME VARCHAR(30) PRIMARY KEY ,
A_OWNER VARCHAR(50) NOT NULL, 
A_TYPE VARCHAR(50) NOT NULL,
A_LOCATION VARCHAR(50) NOT NULL,
COST INT(11) UNSIGNED NOT NULL,
MOBILE INT(11) UNSIGNED NOT NULL,
REG_DATE TIMESTAMP )";

if ($conn->query($sql) === TRUE) {
    echo "Table rent created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>