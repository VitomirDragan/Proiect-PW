<?php
    $mysqli = new mysqli('localhost', 'Vitomir Dragan', '1234', 'housesdatabase') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM housestable") or die($mysqli->error);
