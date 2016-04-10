<?php
class database {
    public static function connect() {
        $mysql_server = "localhost";
        $mysql_admin = "root";
        $mysql_pass = "";
        $mysql_db = "sklep";
        
        $con = @mysqli_connect($mysql_server,$mysql_admin,$mysql_pass)
                or die("Błąd połączenia z serwerem");
        mysqli_select_db($con, $mysql_db)
            or die("Błąd połączenia z bazą");
        
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

