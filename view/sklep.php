<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
    header('Location: ../index.php');
    exit();
}

echo "<p>sklep ".'<a href = "../controller/logout.php">Wyloguj</a></p>';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome = 1"/>
        <meta name="author" content="Bartłomiej Nykiel"/>    
    </head>
    <body>
        
        <a href="DodawanieTowarow.php" class="btn btn-info" role="button">Dodaj towary</a>
     <br /> <br />  
<?php
require_once '../app/con_db.php';
$con = database::connect();

$rezultat = @$con->query("SELECT * FROM towar");

while ($row = $rezultat->fetch_array(MYSQLI_BOTH)) {
    printf("ID: %d  Nazwa: %s Cena: %d Cena zakupu: %d Marza: %d", $row[0], $row[1], $row[2], $row[3], $row[4]); 
    printf("<br />");
}
$con->close();
?>

        
    </body>
