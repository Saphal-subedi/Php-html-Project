<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $contact_no = $_POST["contact_no"];
 
    // Insert data into students table
    $sql = "INSERT INTO students (first_name, last_name, gender, address, contact_no)
            VALUES ('$first_name', '$last_name', '$gender', '$address', '$contact_no')";
 
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
$conn->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Insert Student Data</title>
</head>
<body>
    <h1>Insert Student Data</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>First Name:</label>
        <input type="text" name="first_name"><br><br>
        <label>Last Name:</label>
        <input type="text" name="last_name"><br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>
        <label>Address:</label>
        <textarea name="address"></textarea><br><br>
        <label>Contact No:</label>
        <input type="text" name="contact_no"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
