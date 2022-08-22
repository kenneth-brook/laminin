<?php

 ini_set('error_reporting', E_ALL);
 ini_set('display_errors', 'On');  


$hostname='laminin.365dtm.com';
$username="lamininadmin";
$password="Laminin081522";
$dbname="laminin_db";


$connection = mysqli_connect($hostname, $username, $password);
mysqli_set_charset($connection, 'utf8');
mysqli_select_db($connection, $dbname);


?>