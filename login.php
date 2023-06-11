<!-- php -->
<?php
session_start();
  include 'cfg.php';
  
  // checks if the user exists
  if(isset($_POST['login'])){
    $Username = $_POST['username'];
    $Pass = $_POST['password'];

    $select = mysqli_query($con, "SELECT * FROM register WHERE username = '$Username' AND password = '$Pass'");
    $row = mysqli_fetch_array($select);
    // if exists then saves the data from the user
    if(is_array($row)){
      $_SESSION["username"] = $row ['username'];
      $_SESSION["password"] = $row ['password'];

      $username = $_SESSION["username"]; 
      $query = "SELECT * FROM register WHERE username = '$username'"; 
      $result = mysqli_query($con, $query);
      
      $_SESSION["firstname"] = $row ['firstname'];
      $_SESSION["lastname"] = $row ['lastname'];
      $_SESSION["bday"] = $row ['birthday'];
      $_SESSION["gender"] = $row ['gender'];
    } else {
      echo "<script>
      alert('Invalid Username or Password, try again!')
      window.location.href='login.php'
      </script>";
    }
  }

  if (isset($_SESSION["username"])){
    header("Location: loggedin.php");
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
    <title>Log in</title>
</head>
<body>
    <nav class="justify-content-center navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Primus Dental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto justify-content-center">
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link" href="contact.html">Contact<span class="sr-only">(current)</span></a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Log in<span class="sr-only">(current)</span></a>
          </li> 
        </ul>
      </div>
      </nav>
      <!-- navbar ends -->
      <div id="flyIn" class="content-section text-center mb-5">
        <h1 class="display-4 pb-5">Log in to Your Primus Dental Account</h1>
        <p>If you're already registered an account, fill out the username and password to log in and start making appointments!</p>
        <div class="container ">
            <div class="row">
              <div id="custom-sizing" class="col-lg pt-5">
                <form action="login.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <br><br>
                      <label">Username</label>
                      <input type="text" class="form-control text-center" autocomplete="off" minlength="4" maxlength="16" name="username" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control text-center" autocomplete="off" minlength="6" maxlength="16" name="password" required>
                    </div>
                    <div class="pt-3">
                      <button id="login-anim" name="login" type="submit" class="btn btn-primary" value="login">Log in</button>          
                    </div>
                  </form>
                  <a href="resetpw.php" class="btn btn-danger mt-3" value="login">Reset Password</a>
              </div>
              <div id="custom-sizing" class="col-lg text-center p-5">
                <img src="img/welcome.jpg" class="img-fluid rounded" alt="dentinst-in-action">
              </div>
            </div>  
        </div>
      </div>
      <!-- content ends -->
      <footer id="sticky-footer" class="flex-shrink-0 mt-5">
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