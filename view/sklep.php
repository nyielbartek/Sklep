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

