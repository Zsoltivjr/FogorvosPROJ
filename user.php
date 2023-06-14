<?php  session_start();
            include 'cfg.php'; 
            if(!isset($_SESSION['email'])){
                header('location:login.php');
                exit();
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/clean.png"/>
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
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <nav class="justify-content-center navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Primus Dental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto justify-content-center">
          <?php
                $username = $_SESSION['username'];
                if ($username == 'zsolt'){
                  echo ' <li class="nav-item active">
                  <a class="nav-link text-warning" href="admin/admin.php">Admin<span class="sr-only">(current)</span></a>
                </li>';
                }if ($username == 'klaudia'){
                  echo ' <li class="nav-item active">
                  <a class="nav-link text-warning" href="admin/doctorpanel.php">Visit Appointments<span class="sr-only">(current)</span></a>
                </li>';
                }
                if ($username == 'helena'){
                  echo ' <li class="nav-item active">
                  <a class="nav-link text-warning" href="admin/doctorpanel.php">Visit Appointments<span class="sr-only">(current)</span></a>
                </li>';
                }
          ?>
            <li class="nav-item active">
              <a class="nav-link" href="appointment.php">Appointment<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="doctors.php">Doctors<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Log out<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navbar ends -->
      <!-- welcome ends -->
      <div id="flyIn" class="content-section text-center pb-3">
        <div class="container pb-5">
            <div class="row">
              <div class="col-lg pt-3 text-left">
              <h1 class="display-4 pb-2">Welcome <?php echo ucfirst($_SESSION['firstname']); ?>!</h1>
                <p>Here you can check out Your Personal Data & Appointments</p>
                <h2 class="mt-3 mb-3">Personal Data</h2>                
                  <?php
                    include 'cfg.php';
                            echo 
                            '
                            <ul class="list-group list-group-flush pt-3 pb-5">
                              <li class="list-group-item list-group-item-primary">Email: '.$_SESSION["email"].'</li>
                              <li class="list-group-item list-group-item-primary">Username: '.$_SESSION["username"].'</li>
                              <li class="list-group-item list-group-item-primary">First Name: '.$_SESSION["firstname"].'</li>
                              <li class="list-group-item list-group-item-primary">Last Name: '.$_SESSION["lastname"].'</li>
                              <li class="list-group-item list-group-item-primary">Birthday: '.$_SESSION["bday"].'</li>
                              <li class="list-group-item list-group-item-primary">Gender: '.$_SESSION["gender"].'</li>
                            </ul>
                            ';
                  ?>
                <h2 class="mb-3">Booked Appointments</h2>
                <?php
                    $username = $_SESSION["username"]; 
                    $sql = "SELECT * FROM appointment WHERE user = '$username'";
                    $result = mysqli_query($con,$sql);
                    $resultCheck = mysqli_num_rows($result);  
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $desc=$row['description'];
                            $date=$row['date'];
                            $time=$row['time'];
                            $doc=$row['doctor'];
                            echo 
                            '<p>You reserved an appoitment at <br> '.$date.'.</p>
                            <p>Your reason of visit: <br> '.$desc.'</p>
                            <p>Time of Visit: <br> '.$time.' h</p>
                            <p class="border-bottom">Chosen Doctor: <br> '.$doc.' 
                            <br><a class="btn btn-success mt-1 mb-1" href="updateuser.php?updateid='.$id.'">Change Appointment </a>
                            <a class="btn btn-danger mt-1 mb-1" href="delete.php?removetermin='.$id.'">Delete Appointment </a></p>
                            ';
                            
                        }
                    } else {
                      echo '<p>You have no appointments.</p > <br>
                      <a href="appointment.php"><button id="appointment1" type="button" class="btn btn-danger">Make an Appointment!</button></a>
                      ';
                    }
                ?>
              </div>
              <div class="col-lg text-center">
                <img src="img/user.jpg" class="img-fluid rounded" alt="dentinst-in-action">
              </div>
            </div>  
        </div>
      </div>
      <br>
      <!-- content ends -->
      <footer id="sticky-footer" class="flex-shrink-0 mt-5">
        <div class="container text-center ">
          <p class="fw-bold text-dark">Copyright &copy; Primus Dental</p>
        </div>
      </footer> 
    <!-- custom js -->
    <script src="script.js"></script>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
     <!-- Datepicker -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
     <script src="datepicker.js"></script>
</body>
</html>