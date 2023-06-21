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
    $sql = 'SELECT * FROM Apartament WHERE CodApartament ='.$_GET["id"];
    $result = $conn->query($sql);
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            echo '
            <form action ="ApUpdateAcc.php" method="GET">
                <div class = "form-group">
                    <label name>Cod Apartament: '.$row['CodApartament'].'</label>
                    <input type = "number" name="CodApartament" hidden value = '.$row['CodApartament'].'>
                </div>
                <div class = "form-group">
                    <label>Etaje</label>
                    <input type = "number" name="etaj" placeholder="Old value : '.$row['etaj'].'" required>
                </div>
                <div class = "form-group">
                    <label>Nr Camere</label>
                    <input type = "number" name="nrCamere" placeholder="Old value : '.$row["nrCamere"].'" required>
                </div>
                <div class = "form-group">
                    <label>Pret</label>
                    <input type = "number" name="Pret" placeholder="Old value : '.$row["Pret"].'" required>
                </div>
                <div class = "form-group">
                    <label>Metri Patrati</label>
                    <input type = "number" name="metriPatrati" placeholder="Old value : '.$row["metriPatrati"].'" required>
                </div>
                <div class = "form-group">
                    <label>Cod Agent</label>
                    <input type = "number" name="CodAgent" placeholder="Old value : '.$row["CodAgent"].'" required>
                </div>
                <button type="submit" class="btn btn-warning">UPDATE</button>
            </form>
            
            ';
        }
    }
?>
</body>
</html>