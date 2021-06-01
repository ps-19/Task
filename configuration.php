<?php


// Database is created on my local host with name "users" which contains all informations


$db_user="root";         // Database username 
$db_password="";             // no password
$db_name="accounts";        // Database name is accounts and table name is users

$db = new PDO('mysql:dbname=' . $db_name . ';host=localhost;charset=utf8', $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>