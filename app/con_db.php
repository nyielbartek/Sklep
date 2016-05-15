<?php
class database {
    public static function connect() {
        $mysql_server = "localhost";
        $mysql_admin = "root";
        $mysql_pass = "";
        $mysql_db = "sklep";
        
        $con = @new mysqli($mysql_server,$mysql_admin,$mysql_pass,$mysql_db);
        if ($con->connect_errno!=0)
        {
        echo 'Error: '.$con->connect_erno;
        }
        else
            return $con;
        //mysqli_select_db($con, $mysql_db)
        //    or die("Błąd połączenia z bazą");
        
    }//dodać zamknięcie bazy
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

