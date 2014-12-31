<?php

//echo ("hello world");

//connecting to server
$servername = "samdb.ckqil9abjsky.us-west-2.rds.amazonaws.com";
$username = "samdb";
$password = "samdb123pw";
$dbname = "samdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Database Connection failed: ". mysqli_connect_error());
}

/*$result = $conn->query("select * from test");

while($row = mysqli_fetch_array($result)) { 
  echo $row["name"] . "<br> \r\n"; 
}*/

//echo "Connected successfully!";

//sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

$sql2 = "INSERT INTO MyGuests (firstname, lastname, email) 
VALUES ('Sam', 'Chan', 'sam@ensemble.com')";

$sql3 = "INSERT INTO MyGuests (firstname, lastname, email) 
VALUES ('Sam', 'Chan', 'sam@ensemble.com')";

$conn->query($sql3);


if($conn->query($sql2)== TRUE){
	echo "New reocrd created successfully";
	//echo " Table MyGuests created successfully";
} else {
	echo "Error: ".$sql2 . "<br>". $conn->error;
	//echo "Error creating table: ".$conn->error;
}

$conn->close();

?>
