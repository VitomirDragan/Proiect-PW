<?php
if (isset($_POST['Cauta'])) {
    $tipAnunt = $_POST['tipAnunt'];
    $judet = $_POST['judet'];
    $oras = $_POST['oras'];
    $zona = $_POST['zona'];
    $etaj = $_POST['etaj'];
    $suprafataDeLa = $_POST['suprafataDeLa'];
    $suprafataLa = $_POST['suprafataLa'];
    $pretDeLa = $_POST['pretDeLa'];
    $pretLa = $_POST['pretLa'];

    $conn = new mysqli('localhost', 'Vitomir Dragan', '1234', 'housesdatabase');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }
    $sql = "SELECT Nume,Nume proprietar, Pret, Oras, Descriere from housestable WHERE  Pret>='$pretDeLa' && Pret<='$pretLa' 
&& Suprafata>='$suprafataDeLa' && Suprafata<='$suprafataLa' && `Tipul anuntului`='$tipAnunt' && Judet='$judet' && Oras='$oras'
&& Zona='$zona' && Etaj='$etaj'";
    $result = mysqli_query($conn, $sql);
    $housestable = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../CSS/divDesign.css">
    <link rel="stylesheet" href="../CSS/paragraphDesign.css">
    <link rel="stylesheet" href="../CSS/a.css">
</head>
<html>
<h1>Rezultatele cautarii:</h1>
<div>
    <div>

        <?php foreach($housestable as $house){ ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h3><?php echo htmlspecialchars($house['Nume']);?></h3>
                        <p class="pretOras">Pret: <?php echo htmlspecialchars($house['Pret']);?> euro</p>
                        <p class="pretOras">Oras: <?php echo htmlspecialchars($house['Oras']);?></p>
                        <div><p><?php echo htmlspecialchars($house['Descriere']);?></p></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</html>