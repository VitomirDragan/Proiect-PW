<!DOCTYPE html>
<html>

<head>
        <title>Imo.Home</title>
        <link rel = "stylesheet" href="../CSS/mainDesign.css">
        <link rel="stylesheet" href="../CSS/topButton.css">
        <link rel="stylesheet" href="dropdownButton.css">
        <link rel="stylesheet" href="../CSS/divDesign.css">
        <link rel="stylesheet" href="../CSS/paragraphDesign.css">
        <link rel="stylesheet" href="../CSS/contactImage.css">
        <link rel="stylesheet" href="veziAnunturiButton.css">
        <link rel="stylesheet" href="../CSS/searchForm.css">
        <script src="../JS/navbar_customizing.js"></script>
        <script src="../JS/topButtonScript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <link rel='stylesheet' type='text/css' href='css/style.css' />

        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
        <script type='text/javascript' src='../JS/dynamicpage.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div id="page-wrap">
        <div id="container">
            <div id = "middle">
                <div id="header"></div>
                <div id="nav">
                    <ul>
                        <a><li><div class="dropdown">
                                    <a>Prima pagina</a>
                                    <div class="dropdown-content">
                                        <a class="tablinks" href="#DespreNoi.php">Despre noi</a>
                                        <a class="tablinks" href="#Servicii.php">Servicii</a>
                                        <a class="tablinks" href="#Contact.php">Contact</a>
                                    </div>
                                </div></li></a>
                        <a class="tablinks" href="#Cauta.php"><li>Cauta</li></a>

                        <a><li><div class="dropdown">
                                    <a>Vezi anunturi</a>
                                    <div class="dropdown-content">
                                        <a class="tablinks" href="#VeziAnunt.php">Vizualizare</a>
                                        <a class="tablinks" href="#SorteazaPret.php">Sorteaza dupa pret</a>
                                        <a class="tablinks" href="#SorteazaSuprafata.php">Sorteaza dupa suprafata</a>
                                    </div>
                                </div></li></a>

                        <a class="tablinks" href="#AdaugaAnunt.php"><li>Adauga anunt</li></a>
                        <a href="logout.php"><li>Log out</li></a>

                        <div style = "clear:both;"></div>
                    </ul>
                </div>

    <section id="main-content">
        <div id="guts" class="tabcontent">
            <p class="try">Give it a try!</p><br>
            <form action="/myProject/PHP/VariablesClient.php" method="post">
                <select id="idTipAnunt" name="tipAnunt" placeholder="Tip anunt">
                    <option value="vanzare">Vanzare</option>
                    <option value="inchiriere">Inchiriere</option>
                </select><br>
                <input type="text" id="idJudet" name="judet" placeholder="Judet"><br>
                <input type="text" id="idOras" name="oras" placeholder="Oras"><br>
                <input type="text" id="idZona" name="zona" placeholder="Zona"><br>
                <input type="number" id="idEtaj" name="etaj" placeholder="Etaj"><br>
                <input type="number" id="idSuprafata" name="suprafataDeLa" placeholder="Suprafata (de la..)">
                <input type="number" id="idSuprafata" name="suprafataLa" placeholder="Suprafata (pana la..)"><br>
                <input type="number" id="idPret" name="pretDeLa" placeholder="Pret (de la..)">
                <input type="number" id="idPret" name="pretLa" placeholder="Pret (pana La ..)"><br>
                <label><b><u>Sortare rezultate dupa:</u></b></label><br>
                <select id="idTipSortare" name="tipSortare">
                    <option value="Pret">Pret</option>
                    <option value="Suprafata">Suprafata</option>
                </select><br>
                <input type="submit" name="Cauta" value="Cauta">
            </form>
        </div>
    </section>
                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</div>
</body>
</html>





















