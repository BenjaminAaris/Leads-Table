<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "leads_table";

  $conn = mysqli_connect($servername, $username, $password, "leads_table");

  if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
  }


    
    $sql = 'select * from leads';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) {
      
    } else {
      echo "0 results";
    }

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
  <script src="script.js"></script>
</head>
<body>
  <table>
  <colgroup>
  <col span="3" >
</colgroup>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Mail</th>
      <th>City</th>
      <th>Postal code</th>
      <th>Vat number</th>
      <th>Phone number</th>
      <th>Website</th>
      <th>Adress</th>
    </tr>

    <?php 
    
    while ($row = mysqli_fetch_assoc($result)){
      echo "
      <tr onclick='test()'>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] ."</td>
        <td>" . $row['mail'] ."</td>
        <td>" . $row['city'] ."</td>
        <td>" . $row['postal_code'] ."</td>
        <td>" . $row['vat_number'] ."</td>
        <td>" . $row['phone'] ."</td>
        <td>" . $row['website'] ."</td>
        <td>" . $row['adress'] ."</td>
      </tr> 
      ";
    }
    ?>
    
  </table>
</body>
</html>

