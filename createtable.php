<?php
// Connect to MySQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Create students table
$sql = "CREATE TABLE students (
        roll_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        gender ENUM('Male', 'Female', 'Other') NOT NULL,
        address VARCHAR(100) NOT NULL,
        contact_no VARCHAR(20) NOT NULL
    )";
 
if ($conn->query($sql) === TRUE) {
    echo "Table students created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
 
$conn->close();
?>
