<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';



$query= (filter_var($_GET['query'],FILTER_SANITIZE_STRING));
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$query%'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<?php>

$stmt = $conn->query("SELECT name, continent, independence, head_of_state FROM countries");

echo "<table border='1'>

<tr>

<th>Name</th>

<th>Continent</th>

<th>Independence</th>

<th>Head of state </th>

</tr>";

while($row = mysql_fetch_array($result))

  {

   "<tr>";

   "<td>" . $row['name'] . "</td>";

   "<td>" . $row['continent'] . "</td>";

   "<td>" . $row['independence'] . "</td>";

   "<td>" . $row['head of state'] . "</td>";

   "</tr>";

  }

echo "</table>";

 



?>