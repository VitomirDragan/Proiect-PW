<!DOCTYPE html>
<html>

<head>
    <title>Imo.Home</title>
    <link rel = "stylesheet" href="../CSS/bootstrap.css">
    <link rel = "stylesheet" href="../CSS/bootstrap-theme.css">
    <link rel = "stylesheet" href="../CSS/mainDesign.css">
    <link rel="stylesheet" href="../CSS/topButton.css">
    <link rel="stylesheet" href="dropdownButton.css">
    <link rel="stylesheet" href="../CSS/divDesign.css">
    <link rel="stylesheet" href="../CSS/paragraphDesign.css">
    <link rel="stylesheet" href="../CSS/contactImage.css">
    <link rel="stylesheet" href="../CSS/searchForm.css">
    <script src="../JS/navbar_customizing.js"></script>
    <script src="../JS/topButtonScript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <link rel='stylesheet' href="../CSS/registerButton.css">
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='../JS/dynamicpage.js'></script>
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
                    <a class="tablinks" href="#CautaAdmin.php"><li>Cauta</li></a>

                    <a><li><div class="dropdown">
                                <a>Vezi anunturi</a>
                                <div class="dropdown-content">
                                    <a class="tablinks" href="#VeziAnunt.php">Vizualizare</a>
                                    <a class="tablinks" href="#SorteazaPret.php">Sorteaza dupa pret</a>
                                    <a class="tablinks" href="#SorteazaSuprafata.php">Sorteaza dupa suprafata</a>
                                </div>
                            </div></li></a>

                    <a><li><div class="dropdown">
                                <a>Contribuie</a>
                                <div class="dropdown-content">
                                    <a class="tablinks" href="#AdaugaAnuntA.php">Adauga anunt</a>
                                    <a class="tablinks" href="#StergeAnunt.php">Sterge anunt</a>
                                    <a class="tablinks" href="#CreateAdminAccount.php">Creeaza cont Admin</a>
                                    <a class="tablinks" href="#StergeCont.php">Sterge cont</a>
                                </div>
                            </div></li></a>
                    <a href="logout.php"><li>Log out</li></a>

                    <div style = "clear:both;"></div>
                </ul>
            </div>

            <section id="main-content">
                <div id="guts" class="tabcontent">
                    <?php
                    include_once("Filtru.php");
                    ?>
                </div>
            </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
</body>
</html>
