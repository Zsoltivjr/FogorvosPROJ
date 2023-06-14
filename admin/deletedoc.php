<?php
    // delete function DOC
    include '../cfg.php';
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
    
        $sql = "DELETE FROM appointment WHERE id=$id";
        $result = mysqli_query($con, $sql);
        header("Location: doctorpanel.php");
        }
    

?>