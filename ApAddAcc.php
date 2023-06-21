<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
    $servername = '127.0.0.1:3307';
    $username = 'root';
    $password ='';
    $dbname = 'apartamente';
    $conn = new mysqli($servername,$username,$password,$dbname);
    $sql = 'INSERT INTO apartament VALUES ('.$_GET['CodApartament'].','.$_GET['etaj'].','.$_GET['nrCamere'].','.$_GET['Pret'].','.$_GET['metriPatrati'].','.$_GET['CodAgent'].')';
    $result  = $conn->query($sql);
    if($result === TRUE){
        echo '<h2>Element is Added!</h2>';
    }
?>
</body>
<html>