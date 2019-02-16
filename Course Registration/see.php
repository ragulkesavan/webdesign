<!DOCTYPE html>
<html>
<head>
	<style>
	body	{
		background-image: url("https://www.desktopbackground.org/p/2010/12/06/122005_tree-pattern-simple-white-iphone-6-wallpapers-hd-and-1080p-6-plus_1080x1920_h.jpg");
	}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
		table tr:nth-child(even) {
  background-color: #eee;
}
table tr:nth-child(odd) {
 background-color: #fff;
}
table th {
  background-color: black;
  color: white;
}
	</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "ragul";
$password = "rk@250038";
$dbname = "ragul";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "<center><table>";
$sql = "SELECT regno, name FROM course";
$result = $conn->query($sql);
echo "<tr><th> Reg NO </th><th> Name </ths></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['regno'] . "</td><td>" . $row['name'] . "</td></tr>";  //$row['index'] the index here is a field name
    }
    echo "</table></center>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>