<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
<?php
    $servername = '127.0.0.1:3307';
    $username = 'root';
    $password = '';
    $dbname = 'apartamente';
    $conn = new mysqli($servername,$username,$password,$dbname);
    $sql = 'UPDATE apartament SET etaj ='.$_GET['etaj'].' ,nrCamere = '.$_GET['nrCamere'].',Pret ='.$_GET['Pret'].',
    metriPatrati= '.$_GET['metriPatrati'].', CodAgent='.$_GET['CodAgent'].' WHERE CodApartament = '.$_GET['CodApartament'];
    $result = $conn->query($sql);
    if($result === TRUE){
        echo '<h2>Element is Modified!</h2>';
    }
    echo '<a href="Ap.php">
    <button type="button" class="btn btn-success">GO BACK</button></a>';
?>
</body>
</html>