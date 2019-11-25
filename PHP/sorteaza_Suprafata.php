<?php
$conn = new mysqli('localhost', 'Vitomir Dragan', '1234', 'housesdatabase');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
$sql='SELECT * from housestable order by Suprafata';
$result = mysqli_query($conn, $sql);
$housestable = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<h1>Anunturi:</h1>
<head>
    <link rel="stylesheet" href="../CSS/shortDetails.css">
</head>
<div>
    <div>

        <?php foreach($housestable as $house){ ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h3><?php echo htmlspecialchars($house['Nume']);?></h3>
                        <p class="details">Pret: <?php echo htmlspecialchars($house['Pret']);?> euro</p>
                        <p class="details">Oras: <?php echo htmlspecialchars($house['Oras']);?></p>
                        <p class="details">Suprafata: <?php echo htmlspecialchars($house['Suprafata']);?></p>
                        <p class="details">Numar camere: <?php echo htmlspecialchars($house['Numar camere']);?></p>
                        <p class="details">Etaj: <?php echo htmlspecialchars($house['Etaj']);?></p>
                        <p class="details">Contact: <?php echo htmlspecialchars($house['Date contact']);?></p>
                        <div><p><?php echo htmlspecialchars($house['Descriere']);?></p></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</html>
