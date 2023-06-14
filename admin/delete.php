<?php
 include '../cfg.php';
 // delete function
 if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM appointment WHERE id=$id";
    $result = mysqli_query($con, $sql);
    header("Location: admin.php");
}

?>