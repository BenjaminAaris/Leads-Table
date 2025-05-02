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


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leads_Table</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>

  <input type="text" id="mySearch" onkeyup="search(event)" placeholder="Search.." title="Type in a category">


  <table border="1" id="table" style="width: 100%;">
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
      <tr id='". $row['id'] ."' onclick='showLead(event, ". $row['id'] . ",`". $row['name'] ."`,`". $row['mail'] ."`,`". $row['city'] ."`,`". $row['postal_code'] ."`,`". $row['vat_number'] ."`,`". $row['phone'] ."`,`". $row['website'] ."`,`". $row['adress'] ."`)'>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] ."</td>
        <td>" . $row['mail'] ."</td>
        <td>" . $row['city'] ."</td>
        <td>" . $row['postal_code'] ."</td>
        <td>" . $row['vat_number'] ."</td>
        <td>" . $row['phone'] ."</td>
        <td>" . $row['website'] ."</td>
        <td>" . $row['adress'] ."</td>
        <td><button onclick='deleteLead(event, ". $row['id'] .")'> Delete row </button>" . $row['delete'] ."</td>
      </tr> 
      ";
    }
    
    ?>  

  </table>

  
  
  <!-- Kommentar -->
   
  <script src="script.js"></script>


  <div class="row">
  <div class="column" style="background-color:white;">
    <h2>Navn og info:</h2>
    <h3 >ID: <span id="id"></span></h3>
  <h3>Name: <span id="name"></span> </h3>
  <h3>Website: <span id="website"></span> </h3>
  </div>
  <div class="column" style="background-color:white;">
    <h2>By og CVR nummer:</h2>
    <h3>City: <span id="city"></span> </h3>
  <h3>Postal code: <span id="postal_code"></span> </h3>
  <h3>Vat number: <span id="vat_number"></span> </h3>
  </div>
  <div class="column" style="background-color:white;">
    <h2>Kontakt:</h2>
    <h3>Mail: <span id="mail"></span> </h3>
    <h3>Phone number: <span id="phone"></span> </h3>
    <h3>Adress: <span id="adress"></span> </h3>
  </div>
</div>
  
<form method="POST">
  <?php

  $sql = "DELETE FROM leads WHERE id=" . $row['id'] . "";

    if (mysqli_query($conn, $sql)) {
      echo "<td><button onclick='deleteLead(event, " . $row['id'] . ")></button></td>";
      echo "you have now succesfully deleted this data";
    } else {
      echo "Error deleting record: " . mysqli_error($conn); 
    } 


  ?>
  
</form>

</body>
</html>

