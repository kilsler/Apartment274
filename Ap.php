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

$sql = "SELECT * FROM Apartament";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<table class = "table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Cod Apartament</th>
      <th scope="col">Etaj</th>
      <th scope="col">Nr. Camere</th>
      <th scope="col">Pret</th>
      <th scope="col">Metri Patrati</th>
      <th scope="col">Cod Agent</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["CodApartament"].'</td><td>'.$row["etaj"].'</td><td>'.$row["nrCamere"].'</td>';
        echo '<td>'.$row["Pret"].'</td><td>'.$row["metriPatrati"].'</td><td>'.$row["CodAgent"].'</td>';
        echo '<td><a href = "ApUpdate.php?id='.$row["CodApartament"].'" ><button type ="button" class="btn btn-success">Update</button</a></td>';
        echo '<td><a href = DeleteFirst.php?id ='.$row["CodApartament"].' ><button type ="button" class="btn btn-danger">Delete</button</a></td></tr>';
    }
}else{
    echo '<h2>empty table<h2>';
}
echo '</tbody></table>';
echo '<a href = ApAdd.php ><button type = "button" class = "btn btn-warning">Add Element</button></a>';
echo '<a href="Menu.php">
    <button type="button" class="btn btn-success">GO BACK</button></a>';
?>