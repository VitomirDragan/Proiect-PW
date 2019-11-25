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
            <p class="try">We sold another one!</p><br>
            <?php
            require_once 'process.php';
            ?>
            <?php
            include_once("conectareBazaDeDate.php");
            ?>
            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nume</th>
                        <th>Oras</th>
                        <th>Etaj</th>
                        <th>Pret</th>
                        <th COLSPAN="2">Action</th>
                    </tr>
                    </thead>
                    <?php
                        while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Nume'];?></td>
                        <td><?php echo $row['Oras'];?></td>
                        <td><?php echo $row['Etaj'];?></td>
                        <td><?php echo $row['Pret'];?></td>
                        <td>
                            <a href="CautaAdmin.php#StergeAnunt.php?edit=<?php echo $row['ID']; ?>"
                               class="btn btn-info">Editeaza</a>
                            <a href="process.php?delete=<?php echo $row['ID']; ?>"
                               class="btn btn-danger">Sterge</a>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </table>
            </div>
               <form action="process.php" method="POST">
                   <?php
                   if($update == true):
                   ?>
                   <input type="hidden" name="id" value="<?php echo $id; ?>">
                   <div class="form-group">
                   <label>Nume</label>
                   <input type="text" name="name" class="form-control"
                          value="<?php echo $nume; ?>" placeholder="Nume">
                    </div>
                   <div class="form-group">
                   <label>Oras</label>
                   <input type="text" name="city" class="form-control"
                          value="<?php echo $oras; ?>" placeholder="Oras">
                    </div>
                   <div class="form-group">
                       <label>Etaj</label>
                       <input type="text" name="floor" class="form-control"
                              value="<?php echo $etaj; ?>" placeholder="Etaj">
                   </div>
                   <div class="form-group">
                       <label>Pret</label>
                       <input type="text" name="price" class="form-control"
                              value="<?php echo $pret; ?>" placeholder="Pret">
                   </div>
                        <button type="submit" class="btn btn-info" name="update">Editeaza</button>
                   <?php endif; ?>

    </form>
</div>
    </section>

</div>

</body>

</html>