<?php

$databaseHost = 'localhost';
$databaseName = 'pijarcamp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword) or die ("Maaf gagal terhubung dengan Database");

mysqli_select_db($mysqli, $databaseName);
?>
