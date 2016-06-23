<?php

session_start();
require_once '../app/con_db.php';
$con = database::connect();


$_OK = TRUE; //wszystko gra. moja flaga
//login
$login = $_POST['r_login'];
if ((strlen($login) <= 3) || (strlen($login) > 20)) {
    $_OK = FALSE;
    $_SESSION['e_login'] = "Login musi składać się z od 3 do 20 znaków";
    //exit(); //nie możemy kończyć, bo musi sprawdzać do końca wszystko
}
if (ctype_alnum($login) == FALSE) {
    $_OK = FALSE;
    $_SESSION['e_login'] = "Login może składać się wyłącznie z liter i cyfr (bez polskich znaków)";
    //exit();
}
//email
$email = $_POST['email'];
$email2 = filter_var($email, FILTER_SANITIZE_EMAIL); //usuwamy wszelkie niedozwolone znaki z adresu
//sprawdzamy poprawność budowy adresu i sprawdzamy, czy coś nie zostało zmienione w skutek sanityzacji
if ((filter_var($email2, FILTER_VALIDATE_EMAIL) == false) || ($email != $email2)) {
    $_OK = FALSE;
    $_SESSION['e_email'] = " Niepoprawny adres email";
    //exit();    
}

//hasło
$haslo1 = $_POST['haslo1'];
$haslo2 = $_POST['haslo2'];

if ((strlen($haslo1) < 5) || (strlen($haslo1) > 20)) {
    $_OK = FALSE;
    $_SESSION['e_haslo'] = "Hasło musi posiadać od 5 do 20 znaków";
}
if ($haslo1 != $haslo2) {
    $_OK = FALSE;
    $_SESSION['e_haslo'] = "Hasła nie są jednakowe";
}
$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

//regulamin
if (!isset($_POST['regulamin'])) {
    $_OK = FALSE;
    $_SESSION['e_regulamin'] = "Należy zaakceptować regulamin";
}
//captcha
$cap = "6Leg0iATAAAAACt-BIH37Lwt3YZQiiLx-XEIa3R3"; //to jest ukryty klucz od googla. pamiętać, że wygenerwany dla localhosta
$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $cap . '&response=' . $_POST['g-recaptcha-response']);
$odpowiedz = json_decode($sprawdz);
if ($odpowiedz->success == FALSE) {
    $_OK = FALSE;
    $_SESSION['e_captcha'] = "Nie jesteś człowiekiem?";
}
//zapamiętanie danych formuarza
$_SESSION['fLogin'] = $login;
$_SESSION['fEmail'] = $email;
if (isset($_POST['regulamin'])) $_SESSION['fRegulamin'] = TRUE;
//sprawdzenie powtórzeń w bazie
try {
    $rezultat = $con->query("SELECT id from users where nick = '$login'");
    if (!$rezultat)
        throw new Exception($con->errno);
    $ilosc_loinow = $rezultat->num_rows;
    if ($ilosc_loinow > 0) {
        $_OK = FALSE;
        $_SESSION['e_login'] = "Istnieje już konto przypisane do tego loginu";
    }
    $rezultat = $con->query("SELECT id from users where email = '$email'"); //tak- klient bez i
    if (!$rezultat)
        throw new Exception($con->error);
    $ilosc_maili = $rezultat->num_rows;
    if ($ilosc_maili > 0) {
        $_OK = FALSE;
        $_SESSION['e_email'] = "Istnieje już konto przypisane do tego adresu e-mail";
    }

    if ($_OK == true) {
        //tutaj ddajemy użytkownika, bo walidacja powiodła się
        if ($con->query("INSERT INTO users (nick, pass, rola, email) VALUES('$login','$haslo_hash','U','$email')")) {
            $_SESSION['rejestracja_pomyslna'] = True;
            header('Location: ../view/UdanaRejestracja.php');
        } else {
            throw new Exception($con->error);
        }
    } else
        header('Location: ../view/Rejestracja.php');

    // $con->close();
} catch (Exception $e) {
    echo '<span style = "color:red";>Błąd serwera!';
    echo '<br /> info dla mnie ' . $e;
}
?>
