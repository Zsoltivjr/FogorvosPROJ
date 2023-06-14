
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/clean.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- datepciker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- custom css -->
   <link rel="stylesheet" href="../style.css">
    <title>Admin</title>
</head>
<body id="flyIn" class="admin container">
    <div class="text-center">
    <h1 class="display-4 p-5">Welcome to the Administration Panel</h1>
    <p> As an Administrator, you can remove irrelevant or false entries.</p>
    <p><a class="btn btn-primary" href="../index.php">Back to Main Page</a></p>
    <h2 class="pt-5">Reserved Appointments</h2>
    <table class="table m-5 border border-3">
        <thead>
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Gender</th>
            <th scope="col">Cause of the Problem</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Doctor</th>
            <th scope="col">Update Appointment</th>
            <th scope="col">Update Entries</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // phpmyadmin connect
            include '../cfg.php';

            if(!$con){
                die(mysqli_error($con));
            } 
            session_start();
            if(!isset($_SESSION['username'])){
                header('location:../login.php');
            }
            $username = $_SESSION['username'];
            if ($username != 'zsolt'){
                echo "<script>
                alert('Access Denied!')
                window.location.href='../loggedin.php'
                </script>";
            }
           
            // appointment listing
            $sql = "SELECT * FROM appointment";
            $result = mysqli_query($con,$sql);
            $resultCheck = mysqli_num_rows($result);  
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $fname=$row['firstname'];
                    $lname=$row['lastname'];
                    $bday=$row['birthday'];
                    $gender=$row['gender'];
                    $desc=$row['description'];
                    $date=$row['date'];
                    $time=$row['time'];
                    $doc=$row['doctor'];
                    echo 
                    '
                        <tr>
                            <th scrope="row">'.$fname.'</th>
                            <td>'.$lname.'</td>
                            <td>'.$bday.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$desc.'</td>
                            <td>'.$date.'</td>
                            <td>'.$time.'</td>
                            <td>'.$doc.'</td>
                            <td><a class="btn btn-success" href="update.php?updateid='.$id.'">Update</a></td>
                            <td><a class="btn btn-danger" href="delete.php?deleteid='.$id.'">Delete</a></td>
                        </tr>
                    ';
                }
            }
            
        ?>
        </tbody>
    </table>
    <!-- // -->
    <h2 class="pt-5">Registered users</h2>
    <table class="table m-5 border border-3">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Gender</th>
                <th scope="col">Delete User</th>
            </tr>
        </thead>
        <tbody>        
                <?php

                $sql = "SELECT * FROM register";
                $result = mysqli_query($con,$sql);
                $resultCheck = mysqli_num_rows($result);  
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        $userid=$row['id'];
                        $userN=$row['username'];
                        $passW=$row['password'];
                        $fnamE=$row['firstname'];
                        $lnamE=$row['lastname'];
                        $bday=$row['birthday'];
                        $gender=$row['gender'];
                        echo 
                        '
                            <tr>
                                <th scrope="row">'.$userN.'</th>
                                <td>****</td>
                                <td>'.$fnamE.'</td>
                                <td>'.$lnamE.'</td>
                                <td>'.$bday.'</td>
                                <td>'.$gender.'</td>
                                <td><a class="btn btn-danger" href="admin.php?deleteuser='.$userid.'">Remove User</a></td>
                            </tr>
                        ';
                         // delete function
                        if (isset($_GET['deleteuser'])) {
                            $id=$_GET['deleteuser'];
                            $sql = "DELETE FROM register WHERE id=$id";
                            $result = mysqli_query($con, $sql);
                            header("Location: admin.php");
                        }
                    }
                }
                ?>
        </tbody>
    </table>
    </div>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
</body>
</html>