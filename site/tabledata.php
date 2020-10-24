<?php
include "connection.php";
$sql = "SELECT name, age FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Name</th><th>Age</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>