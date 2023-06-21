<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>

<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "Apartamente";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM Agent";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<table class = "table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Cod Agent</th>
      <th scope="col">Nume</th>
      <th scope="col">Prenume</th>
      <th scope="col">virsta</th>
      <th scope="col">relefon</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["CodAgent"].'</td><td>'.$row["nume"].'</td><td>'.$row["prenume"].'</td>';
        echo '<td>'.$row["virsta"].'</td><td>'.$row["telefon"].'</td>';
        echo '<td><a href = "AgentUpdate.php?id='.$row["CodAgent"].'" ><button type ="button" class="btn btn-success">Update</button</a></td>';
        echo '<td><a href = DeleteFirst.php?id ='.$row["CodAgent"].' ><button type ="button" class="btn btn-danger">Delete</button</a></td></tr>';
    }
}else{
    echo '<h2>empty table<h2>';
}
echo '</tbody></table>';
echo '<a href = ApAdd.php ><button type = "button" class = "btn btn-warning">Add Element</button></a>';
echo '<a href="Menu.php">
    <button type="button" class="btn btn-success">GO BACK</button></a>';
?>