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
    <title>Contact Page</title>
</head>
<body>
<nav class="justify-content-center text-center navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Primus Dental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto justify-content-center">
          <?php
            session_start();
            include 'cfg.php'; 
            if(!isset($_SESSION['username'])){
                header('location:login.php');
            }
                $username = $_SESSION['username'];
                if ($username == 'zsolt'){
                  echo ' <li class="nav-item active">
                  <a class="nav-link text-warning" href="admin/admin.php">Admin<span class="sr-only">(current)</span></a>
                </li>';
                }
                if ($username == 'klaudia'){
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
              <a class="nav-link" href="user.php">My Profile<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="appointment.php">Appointment<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="doctors.php">Doctors<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Log Out<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navbar ends -->
      <div id="flyIn" class="content-section text-center mb-3">
        <h1 class="display-4 pb-5">Contact Details</h1>
        <h1 class="display-4">Primus Dental Phone Number +381(0)244 100 202</h1>
        <div class="container pt-5">
            <div class="row border-bottom pb-1 text-left">
              <div id="custom-sizing" class="col-lg">
                <h2>Primus Dental Centar</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Šandora Petefija 3-5</li>
                    <li class="list-group-item">24000 Subotica, R Srbija</li>
                    <li class="list-group-item">+ 381 (0)24 4 100 202</li>
                    <li class="list-group-item">+ 381 (0)65 9 100 202</li>
                    <li class="list-group-item">info@primusdental.rs</li>
                </ul>
              </div>
              <div id="custom-sizing" class="col-lg text-left">
                <h2>Working Hours</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Ponedeljak od 9h do 19h</li>
                    <li class="list-group-item">Utorak od 9h do 19h</li>
                    <li class="list-group-item">Sreda od 9h do 19h</li>
                    <li class="list-group-item">Cetvrtak od 9h do 19h</li>
                    <li class="list-group-item">Petak od 9h do 19h</li>
                </ul>
              </div>
            </div>  
        </div>
      </div>
      <div class="border mt-5 mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2766.5338510318734!2d19.656632176707404!3d46.10026839077447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47436738a22efad9%3A0xef6ead3c167fc5a4!2sStomatolo%C5%A1ka%20ordinacija%20PRIMUS%20-%20DENTAL%20CENTAR!5e0!3m2!1sde!2sde!4v1686498904762!5m2!1sde!2sde" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- content ends -->
      <footer id="sticky-footer" class="flex-shrink-0 mt-5 pt-5">
        <div class="container text-center ">
          <p class="fw-bold text-dark">Copyright &copy; Primus Dental</p>
        </div>
      </footer> 
     <!-- custom js -->
    <script src="register.js"></script>
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