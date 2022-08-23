<?php
session_start();
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
include "includes/db_config.php";
// Include and show the requested page
include $page . '.php';
?>