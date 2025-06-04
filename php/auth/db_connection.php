<?php

$serverName = 'localhost';
$userName = 'root';
$password =  '';
$dbName = 'php-api';

try 
{
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
catch(Exception $e) 
{
    echo 'connection failed ' . $e->getMessage();
    return false;
}

