<?php require_once '../app/con_db.php'; 
 session_start();
 if (!isset($_SESSION['rejestracja_pomyslna']))
 {
     header('Location: ../index.php');
     exit();
 }
 else
 {
     unset($_SESSION['rejestracja_pomyslna']);
 }
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