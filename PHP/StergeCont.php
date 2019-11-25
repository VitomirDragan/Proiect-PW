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
            <section id="main-content">
                <div id="guts" class="tabcontent">
                    <?php
                    require_once 'processContAdmin.php';
                    include_once("conectareBazaDeDateAdmin.php");
                    ?>
                    <div class="row justify-content-center">
                        <table class="table">
                            <p class="try">Admins:</p><br>
                            <thead>
                            <tr>
                                <th>Nume</th>
                                <th COLSPAN="2">Action</th>
                            </tr>
                            </thead>
                            <?php
                            while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row['Username'];?></td>
                                    <td>
                                        <a href="processContAdmin.php?delete=<?php echo $row['Id']; ?>"
                                           class="btn btn-danger">Sterge</a>
                                    </td>
                                </tr>
                            <?php endwhile ?>
                        </table>
                    </div>

                <?php
                require_once 'processContClient.php';
                include_once("conectareBazaDeDateClient.php");
                ?>
                <div class="row justify-content-center">
                    <table class="table">
                        <p class="try">Clients:</p><br>
                        <thead>
                        <tr>
                            <th>Nume</th>
                            <th COLSPAN="2">Action</th>
                        </tr>
                        </thead>
                        <?php
                        while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['Username'];?></td>
                                <td>
                                    <a href="processContClient.php?delete=<?php echo $row['id']; ?>"
                                       class="btn btn-danger">Sterge</a>
                                </td>
                            </tr>
                        <?php endwhile ?>
                    </table>
                </div>
                </div>
            </section>

 </div>

</body>

</html>