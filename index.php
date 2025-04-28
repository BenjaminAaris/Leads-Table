

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads</title>
<link rel="stylesheet" href="index.css">
<body>
<h1>Leads table</h1> 
<h2> Here you can see all the information from the DataBase </h2>


</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
}
  echo "Connected successfully";
  
  $sql = "select * from leads_table"
?>