<?php
    session_start();
        if(empty($_SESSION['email']) || $_SESSION['email'] == ''){
            header("Location: index.php");
        die();
        }
    if(session_destroy()){
        header("location: index.php");
    }