<?php
$servername="localhost";
$user="root";
$pass="";
$db="mydb";
$conn=new mysqli($servername, $user, $pass, $db);
if($conn->connect_error)
{ die("Connection failed".$conn->connect_error);
}
echo "Connected Successfully"."<br/>";

$sql="select * from students";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
	if($row["gender"]=="Male")
echo "Roll No:". $row['roll_no']."-FirstName:".$row['first_name']."-LastName:".$row['last_name']."-Gender:".$row['gender']."-Address:".$row['address']."-Contact:".$row['contact_no']."<br/>";
}
}
else{ 
echo "0 results";
};

$conn->close()
?>
