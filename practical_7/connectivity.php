<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="Agroculture";
// Create connection
$conn = mysqli_connect("localhost", "root", "root","Agroculture");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// $sql = "CREATE TABLE MyGuests (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL,
//    email VARCHAR(50),
//    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//    )";
//    if ($conn->query($sql) === TRUE) {
//      echo "Table MyGuests created successfully";
//    } else {
//      echo "Error creating table: " . $conn->error;
//    }
//    $conn->close();



// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";
// if ($conn->multi_query($sql) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close();



//update 
// 


// sql to delete a record
// $sql = "DELETE FROM MyGuests WHERE id=3";
// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }
// $conn->close();



$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>



   

