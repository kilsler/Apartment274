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
$sql = 'SELECT * FROM Agent WHERE CodAgent = '.$_GET['id'];
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '
            <form action ="AgentUpdateAcc.php" method="GET">
                <div class = "form-group">
                    <label name>Cod Agent: '.$row['CodAgent'].'</label>
                    <input type = "number" name="CodAgent" hidden value = '.$row['CodAgent'].'>
                </div>
                <div class = "form-group">
                    <label>nume</label>
                    <input type = "text" name="nume" placeholder="Old value : '.$row['nume'].'" required>
                </div>
                <div class = "form-group">
                    <label>prenume</label>
                    <input type = "text" name="prenume" placeholder="Old value : '.$row["prenume"].'" required>
                </div>
                <div class = "form-group">
                    <label>virsta</label>
                    <input type = "number" name="virsta" placeholder="Old value : '.$row["virsta"].'" required>
                </div>
                <div class = "form-group">
                    <label>telefon</label>
                    <input type = "number" name="telefon" placeholder="Old value : '.$row["telefon"].'" required>
                </div>
                <button type="submit" class="btn btn-warning">UPDATE</button>
            </form>
            
            ';
    }
}
?>
</body>
</html>