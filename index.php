<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once './app/con_db.php'; ?>
<html lang="pl">
    <head>
        <title>Najlepszy ze wszystkich sklep</title>
        <meta name="description" content="Najlepszy sklep, bo jedyny" /> 
        <meta name="keywords" content="sklep, zakupy, cena"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome = 1"/>
        <meta name="author" content="Bartłomiej Nykiel"/>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <meta charset="UTF-8">

    </head>
    <body>
        <div class="container">
            <div class="row">

                <?php
                database::connect();
                // put your code here
                echo "<h1> działa! </h1>";
                ?>
            </div>
            <?php include "view/menu1.php" ?>
        </div>

    </body>
</html>
