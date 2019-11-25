<?php
$mysqli = new mysqli('localhost', 'Vitomir Dragan', '1234', 'housesdatabase') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM admin") or die($mysqli->error);
