<?php
    session_start();

    if(isset($_SESSION["login"])){
        require_once('admin.php');
    } else {
        require_once('login.php');
    }

?>