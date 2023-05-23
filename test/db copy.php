<?php
$servername = "127.0.0.1";
$username = "naufal";
$password = "naufal";
$dbname = "Redlock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from employees table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Generate HTML table to display data
echo "<table class='table table-hover'>
<thead class='thead-dark'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Position</th>
</tr>
</thead>
<tbody>";

while ($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $row["ID"] . "</td>";
  echo "<td>" . $row["Name"] . "</td>";
  echo "<td>" . $row["Address"] . "</td>";
  echo "<td>" . $row["Position"] . "</td>";
  echo "</tr>";
}

echo "</tbody>
</table>";

// Close connection
// $conn->close();
?>
