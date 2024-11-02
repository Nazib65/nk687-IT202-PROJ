// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu

<?php
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'nk687';
   $username = 'nk687';
   $password = 'NazibIrfan1@';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("You are connected to the $host database!");
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
 }
 getDB();
?>

