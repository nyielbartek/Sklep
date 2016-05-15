<?php
session_start();
if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
{
    header('Location: ../index.php');
    exit();
}

require_once '../app/con_db.php';

$con = database::connect();

$login = $_POST['login'];
$haslo = $_POST['haslo'];
$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

if ($rezultat = @$con->query(sprintf("SELECT * FROM users WHERE nick = '%s' AND pass = '%s'",
 mysqli_real_escape_string($con,$login), mysqli_real_escape_string($con, $haslo))))
{
$ilosc_uzytkownikow = $rezultat->num_rows;
if($ilosc_uzytkownikow >0)
{
    unset($_SESSION['blad']);
    $_SESSION['zalogowany'] = true;
    $uzytkownik = $rezultat->fetch_assoc(); 
    $_SESSION['nick'] = $uzytkownik['nick'];
    $_SESSION['rola'] = $uzytkownik['rola'];
    
    $rezultat->free_result();
    header('Location: ../view/sklep.php');
} 
 else {
$_SESSION['blad'] = '<span style="clor:red"> Nieprawidłowy login lub hasło!</span>';
header('Location: ../index.php');
}
$con->close();
}
?>




