<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'dbTest';

$connection = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$connection) {
    die ("failed" . mysqli_connect_error());
}

$sql = " ";

if (mysqli_query($connection, $sql)) {
    echo 'success';
}
else {
    echo 'Failed' . mysqli_error();
}