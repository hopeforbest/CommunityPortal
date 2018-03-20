<?php
spl_autoload_register(function ($class_name) {
    
    include $_SERVER['DOCUMENT_ROOT'] . "/www.capstone.com/" .$class_name . '.php';
    
});
    
   
    
?>