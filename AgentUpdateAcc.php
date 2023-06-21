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

$conn = new mysqli($servername,$username,$password,$dbname );

$sql = 'UPDATE Agent SET nume ="'.$_GET['nume'].'" ,prenume = "'.$_GET['prenume'].'",virsta ='.$_GET['virsta'].',
    telefon= '.$_GET['telefon'].' WHERE CodAgent = '.$_GET['CodAgent'];
    $result = $conn->query($sql);
    if($result === TRUE){
        echo '<h2>Agent is Modified!</h2>';
    }
    echo '<a href="Agent.php">
    <button type="button" class="btn btn-success">GO BACK</button></a>';
?>
</body>
