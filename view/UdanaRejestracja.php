<?php
require_once '../app/con_db.php';
session_start();
if (!isset($_SESSION['rejestracja_pomyslna'])) {
    header('Location: ../index.php');
    exit();
} else {
    unset($_SESSION['rejestracja_pomyslna']);
}
//usuwanie zmiennych pamiętających wprowadzone dane
if (isset($_SESSION['fLogin']))
    unset($_SESSION['fLogin']);
if (isset($_SESSION['fEmail']))
    unset($_SESSION['fEmail']);
if (isset($_SESSION['fRegulamin']))
    unset($_SESSION['fRegulamin']);
//usuwanie zmiennych pamiętających błędy

if (isset($_SESSION['e_login']))
    unset($_SESSION['e_login']);
if (isset($_SESSION['e_email']))
    unset($_SESSION['e_email']);
if (isset($_SESSION['e_haslo']))
    unset($_SESSION['e_haslo']);
if (isset($_SESSION['e_regulamin']))
    unset($_SESSION['e_regulamin']);
if (isset($_SESSION['e_captcha']))
    unset($_SESSION['e_captcha']);
if (isset($_SESSION['blad']))
    unset($_SESSION['blad']);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Najlepszy ze wszystkich sklep</title>
        <meta charset="utf8"/> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome = 1"/>
        <meta name="author" content="Bartłomiej Nykiel"/>
    </head>
    <body>
        Dziękuję za zrejestrowanie!. Zaloguj się aby kontynuować<br /> <br />
        <a href="../index.php">Zaloguj się na swoje konto</a>

    </body>
</html>