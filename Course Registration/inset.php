<!DOCTYPE html>
<style >
	.h1 {
		color: #ffffff;
	}
</style>
<html>
<body>
	<h1 >Want to register ?</h1>
<form>
<input type="button" value="back" onclick="window.location.href='home.html'" style="background-color: #4CAF50" />
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "ragul";
$password = "rk@250038";
$dbname = "ragul";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="INSERT INTO course (name, regno, phno, email) VALUES ('".$_POST['name']."', '".$_POST['regno']."', '".$_POST['phno']."', '".$_POST['email']."')";
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">

          window.onload = function () { alert("successfully registered!"); }
</script>';} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

