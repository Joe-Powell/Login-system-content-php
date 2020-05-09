<?php
session_start();


?>





<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <link rel="stylesheet" href="navbar4.css">

</head>

<body>



<header>

    <div class="header-login">



    <?php

        if(isset($_SESSION['username'])) {

            include 'navbar.php';
           
            }else{

            echo ' <form class="form-login" action="includes/login.inc.php" method="post">

            <input type="text" name="mailuid" id="" placeholder="Username/E-mail....">

            <input type="password" name="pwd" id="" placeholder="Password">

            <button type="submit" name="login-submit">Login</button>

        </form>

        <a class="signup" href="signup.php">Signup</a>';

        }


 ?>

    
    </div>

 </header>

















    

