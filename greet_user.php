<?php
date_default_timezone_set('Asia/Kolkata'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars(trim($_POST['name']));
    $food = htmlspecialchars(trim($_POST['food']));
    $currentHour = date('H');

    if ($currentHour >= 2 && $currentHour < 11) {
        $greeting = "Good Morning"; 
    } elseif ($currentHour >= 11 && $currentHour < 16) {
        $greeting = "Good Afternoon"; 
    } elseif ($currentHour >= 16 && $currentHour < 21) {
        $greeting = "Good Evening"; 
    } else {
        $greeting = "Good Night";
    }

    include 'Templates/greet_user.view.php';
} else {

    header("Location: Templates/greet_user.view.php");
    exit();
} 