<?php
if(isset($_POST['AdaugaAnuntClient'])){
    $nume = $_POST['nume'];
    $numeProprietar = $_POST['numeProprietar'];
    $tipAnunt = $_POST['tipAnunt'];
    $pret = $_POST['pret'];
    $judet = $_POST['judet'];
    $oras = $_POST['oras'];
    $zona = $_POST['zona'];
    $nrCamere = $_POST['nrCamere'];
    $etaj = $_POST['etaj'];
    $suprafata = $_POST['suprafata'];
    $tipApartament = $_POST['tipApartament'];
    $contact = $_POST['contact'];
    $descriere = $_POST['descriere'];
    $conn = new mysqli('localhost', 'Vitomir Dragan', '1234', 'housesdatabase');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO housestable (`Nume`, `Nume proprietar`, `Tipul anuntului`, `Pret`, `Judet`, `Oras`, `Zona`, `Descriere`, `Tip apartament`, `Numar camere`, `Etaj`, `Suprafata`, `Date contact`)
VALUES ('$nume', '$numeProprietar', '$tipAnunt','$pret', '$judet','$oras','$zona','$descriere','$tipApartament','$nrCamere','$etaj','$suprafata','$contact')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/myProject/PHP/Cauta.php");
    } else {
        echo "Error adding record: " . $conn->error;
    }

    $conn->close();
}
