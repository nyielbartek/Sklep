<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
ToDo:
repozytorium
kod aktualny
opis walidacji
dodawanie produktów - całość na mail z informacją, że wszystko jest 
-->
<?php
require_once './app/con_db.php';
session_start();
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
    header('Location: view/sklep.php');
    exit();
}
?>
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
                echo "<h1> Sklep internetowy </h1>";
                ?>
            </div>
            <?php
            include "view/menu1.php";
            if (isset($_SESSION['blad']))
                echo $_SESSION['blad'];
            if (isset($_SESSION['blad']))
                unset($_SESSION['blad']);
            ?>

        </div>
        <!-- Third Container (Grid) -->
        <div class="container-fluid bg-3 text-center">   
            <h3 class="margin">Można wybierać, nie można kupić</h3><br>
            <div class="row">
                <div class="col-sm-4">
                    <p>Wybrać można pół mocnej</p>
                    <img src="view/mała.jpg" alt="espresso">
                </div>
                <div class="col-sm-4"> 
                    <p>Wybrać można całą słabą</p>
                    <img src="view/czarna.jpg" alt="Czarna">
                </div>
                <div class="col-sm-4"> 
                    <p>Wybrać można smaczną</p>
                    <img src="view/biała.jpg" alt="Biała">
                </div>
            </div>
        </div>
    </body>
</html>
