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
 /*
$result = $conn->query("select * from test");

while($row = mysqli_fetch_array($result)) { 
  echo $row["name"] . "<br> \r\n"; 
}*/

echo "Connected successfully!\r\n";

//sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

//$sql1 = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Sam', 'Chan', 'sam@abc.com')";
/*$sql1 = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Smith', 'Js@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Frank', 'Johnson', 'fjohnson@abc.com');";

//$delete = "DELETE from MyGuests";

if (mysqli_multi_query($conn, $sql1)) {
	echo "new multi records add successfully\r\n";
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: ". $conn->error;
}*/

/*$result = $conn->query("SELECT id, firstname, lastname, email from MyGuests;");
if(mysqli_num_rows($result) > 0){
	echo "total rows: ".mysqli_num_rows($result)."\r\n";
	while($row = mysqli_fetch_array($result)){
		echo "id: ". $row["id"]. " |firstname: " . $row["firstname"]. " |lastname: ". $row["lastname"]. " |email: ".$row["email"]."\r\n";
	}
}*/

/*if(mysqli_query($conn, "delete from MyGuests where id = 15;")){
	echo "successfully deleted id 15";
} else {
	echo "error deleteing ". mysqli_error($conn);
}*/

/*if(mysqli_query($conn, "update MyGuests set lastname = 'Bryant' where id=16;")){
	echo "successfully updated\r\n";
	$result = mysqli_query($conn, "select id, firstname, lastname from MyGuests;");
	while($row = mysqli_fetch_array($result)){
		echo "id: ". $row["id"]. " firstname: ". $row["firstname"]. " lastname: ".$row["lastname"];
	}
} else {
	echo "error updating ". mysqli_error($conn);
}*/

$sql1 = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Sam', 'Smith', 'samsmith@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Amy', 'a', 'fjohnson@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Tony', 'b', 'fjohnson@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Peter', 'c', 'fjohnson@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Derek', 'd', 'fjohnson@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Cindy', 'e', 'fjohnson@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Cat', 'f', 'fjohnson@abc.com');";
$sql1 .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Jonathan', 'g', 'fjohnson@abc.com');";

mysqli_multi_query($conn, $sql1);

//mysqli_query($conn, "truncate table MyGuests;");

$conn->close();

?>
