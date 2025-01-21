<?php 
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["name"])) {
session_unset();
session_destroy();

sleep(2);
header("location:home.php");
}
