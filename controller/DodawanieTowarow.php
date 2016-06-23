<?php

session_start();
require_once '../app/con_db.php';
$con = database::connect();



$nazwa = $_POST['nazwa'];
$cena = $_POST['cena'];
$cena_zak = $_POST['cena_zak'];
$marza = $_POST['marza'];
$ilosc = $_POST['ilosc'];
$opis = $_POST['opis'];


try {
    //tutaj ddajemy użytkownika, bo walidacja powiodła się
    if ($con->query("INSERT INTO towar (nazwa, cena, cena_zak, marza, opis, stan_mag, sprz_ost_msc, sprz_ost_rok, ilosc_rez ) "
                    . "VALUES('$nazwa','$cena','$cena_zak','$marza','$opis','$ilosc',0,0,0)")) {
        $_SESSION['dodano_towar'] = True;
        header('Location: ../view/DodawanieTowarow.php');
    } else {
        throw new Exception($con->error);
    }

    // $con->close();
} catch (Exception $e) {
    echo '<span style = "color:red";>Błąd serwera!';
    echo '<br /> info dla mnie ' . $e;
}
?>
