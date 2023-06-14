<?php 
session_start();
include 'cfg.php';
if(!isset($_SESSION['email'])){
    header('location:login.php');
    exit();
}
 // delete function
 if (isset($_GET['removetermin'])) {
    $id=$_GET['removetermin'];
    $sql = "DELETE FROM appointment WHERE id=$id";
    $result = mysqli_query($con, $sql);
    header("Location: user.php");
    exit();
}

?>
