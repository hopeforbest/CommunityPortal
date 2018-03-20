<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:/M5Project/view/login.php");
}
?>