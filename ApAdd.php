<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
echo '
    <form action ="ApAddAcc.php" method="GET">
        <div class = "form-group">
            <label name>Cod Apartament </label><br>
            <input type = "number" name="CodApartament" placeholder="number" required>
        </div>
        <div class = "form-group">
            <label>Etaje</label><br>
            <input type = "number" name="etaj" placeholder="number" required>
        </div>
        <div class = "form-group">
            <label>Nr Camere</label><br>
            <input type = "number" name="nrCamere" placeholder="number"  required>
        </div>
        <div class = "form-group">
            <label>Pret</label><br>
            <input type = "number" name="Pret" placeholder="number"  required>
        </div>
        <div class = "form-group">
            <label>Metri Patrati</label><br>
            <input type = "number" name="metriPatrati" placeholder="number"  required>
        </div>
        <div class = "form-group">
            <label>Cod Agent</label><br>
            <input type = "number" name="CodAgent" placeholder="number"  required>
        </div>
        <button type="submit" class="btn btn-warning">Add</button>
    </form>
    ';
?>
</body>
<html>