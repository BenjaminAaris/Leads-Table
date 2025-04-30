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
</head>
<body>
  <input type="text" id="mySearch" onkeyup="search(event)" placeholder="Search.." title="Type in a category">
  <table id="table" style="width: 100%;">
    <col width="20px" />
    <col width="30px" />
    <col width="40px" />
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
      <th>Delete</th>
    </tr>

    <?php 
    
    while ($row = mysqli_fetch_assoc($result)){
      echo "
      <tr id='row' onclick='showLead(". $row['id'] . ",`". $row['name'] ."`,`". $row['mail'] ."`,`". $row['city'] ."`,`". $row['postal_code'] ."`,`". $row['vat_number'] ."`,`". $row['phone'] ."`,`". $row['website'] ."`,`". $row['adress'] ."`)'>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] ."</td>
        <td>" . $row['mail'] ."</td>
        <td>" . $row['city'] ."</td>
        <td>" . $row['postal_code'] ."</td>
        <td>" . $row['vat_number'] ."</td>
        <td>" . $row['phone'] ."</td>
        <td>" . $row['website'] ."</td>
        <td>" . $row['adress'] ."</td>
        <td><button type='button' value='Detlete' onlick='deleteRow(l)'>Delete</button>" . $row['delete'] ."</td>
      </tr> 
      ";
    }
    
    ?>


  </table>
  <h3>ID: <span id="id"></span></h3>
  <h3>Name: <span id="name"></span> </h3>
  <h3>Mail: <span id="mail"></span> </h3>
  <h3>City: <span id="city"></span> </h3>
  <h3>Postal code: <span id="postal_code"></span> </h3>
  <h3>Vat number: <span id="vat_number"></span> </h3>
  <h3>Phone number: <span id="phone"></span> </h3>
  <h3>Website: <span id="website"></span> </h3>
  <h3>Adress: <span id="adress"></span> </h3>
  <h3>Delete: <button type="button" value="Delete" onclick="deleteRow(this)">Delete</button><span id="delete"></span></h3>

  <script>
function deleteRow(r) {
  var l = r.parentNode.parentNode.rowIndex;
  document.getElementById("table").deleteRow(r);
}
</script>

  <!-- Kommentar -->
   



  <script src="script.js"></script>
</body>
</html>

