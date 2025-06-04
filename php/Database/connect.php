<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';

$connection = mysqli_connect($serverName, $userName, $password);

if(!$connection) {
    // echo 'failed';
    // exit;
    die('Failed' . mysqli_connect_error());
}

$sql = "CREATE DATABASE `dbTest`";

if (mysqli_query($connection, $sql)) {
    echo 'success';
}
else {
    echo 'Failed' . mysqli_connect_error();
}