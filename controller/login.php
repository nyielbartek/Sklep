<?php
require_once '../controller/logout.php';
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
//$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");//nie potrzebujemy, bo jest hashowanie hasel

if ($rezultat = @$con->query(sprintf("SELECT * FROM users WHERE nick = '%s'",// AND pass = '%s'", tego tez juz nie trzeba po hashowaniu
 mysqli_real_escape_string($con,$login))))
{
$ilosc_uzytkownikow = $rezultat->num_rows;
if($ilosc_uzytkownikow >0)
{
    $uzytkownik = $rezultat->fetch_assoc(); //pobiedamy dane
    if (password_verify($haslo, $uzytkownik['pass']))
    {            
        unset($_SESSION['blad']);
        $_SESSION['zalogowany'] = true;
        $_SESSION['nick'] = $uzytkownik['nick'];
        $_SESSION['rola'] = $uzytkownik['rola'];

        $rezultat->free_result();
        header('Location: ../view/sklep.php');
    }
    else
    {
    $_SESSION['blad'] = '<span style="clor:red"> Nieprawidłowy login lub hasło!</span>';
    header('Location: ../index.php');
    }
} 
 else {
$_SESSION['blad'] = '<span style="clor:red"> Nieprawidłowy login lub hasło!</span>';
header('Location: ../index.php');
}
$con->close();
}
?>

