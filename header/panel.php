<?php

$isAdmin = false;

if ($isAdmin === false) 
{
    header("Location: login.php");
    exit;
}

// echo 'خیلی خیلی مهم فقط ادمین میتواند ان را ببیند';

echo 'important content';