<?php
    session_start();
        if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
            header("Location: index.php");
        die();
        }
    if(session_destroy()){
        header("location: index.php");
    }