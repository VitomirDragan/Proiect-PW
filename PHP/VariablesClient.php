<?php
    session_start();
    if (isset($_POST['Cauta'])) {
        $_SESSION["tipAnunt"] = $_POST['tipAnunt'];
        $_SESSION["judet"] = $_POST['judet'];
        $_SESSION["oras"] = $_POST['oras'];
        $_SESSION["zona"] = $_POST['zona'];
        $_SESSION["etaj"] = $_POST['etaj'];
        $_SESSION["suprafataDeLa"] = $_POST['suprafataDeLa'];
        $_SESSION["suprafataLa"] = $_POST['suprafataLa'];
        $_SESSION["pretDeLa"] = $_POST['pretDeLa'];
        $_SESSION["pretLa"] = $_POST['pretLa'];
        $_SESSION["tipSortare"] = $_POST['tipSortare'];
    }
    header("Location: http://localhost/myProject/PHP/RezultateCautareClient.php");