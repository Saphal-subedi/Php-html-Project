<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
$sql = "SELECT * FROM students ORDER BY first_name ASC, last_name ASC";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Roll No.: " . $row["roll_no"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . " - Gender: " . $row["gender"] . " - Address: " . $row["address"] . " - Contact No.: " . $row["contact_no"] . "<br>";
    }
} else {
    echo "No records found";
}
 
// Close connection
mysqli_close($conn);
?>
