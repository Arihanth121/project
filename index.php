<?php
$servername = "localhost";
$username = "root";
$password = "Aaryan@1234";
$dbname = "ari";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT STUDENT_ID, NAME, DOB FROM ari.students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["STUDENT_ID"]."</td><td>".$row["NAME"]."</td><td>".$row["DOB"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>