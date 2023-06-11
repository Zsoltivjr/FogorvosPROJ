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
     <!-- custom js -->
    <script src="register.js"></script>
    <title>Register</title>
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
            <a class="nav-link" href="doctors.html">Doctors<span class="sr-only">(current)</span></a>
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
        <h1 class="display-4 pb-5">Register to Primus Dental</h1>
        <p>We would be honored to have you as our patient and look forward to helping you achieve a healthy and beautiful smile.</p>
        <div class="container">
            <div class="row">
              <div id="custom-sizing" class="col-lg pt-5">
                <form name="myRegister" method="POST" onsubmit="return checkRegister()" enctype="multipart/form-data">
                    <div class="form-group  ">
                      <label>Username</label>
                      <input type="text" class="form-control text-center" autocomplete="off" minlength="4" maxlength="16" name="username">
                    </div>
                    <div class="form-group">
                      <label>Password <br> <small>(At least 6 characters, upper/lowercase and a special symbol)</small></label>
                      <input type="password" autocomplete="off" class="form-control text-center" autocomplete="off" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}" name="password">
                      
                    </div>
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control text-center" minlength="3" maxlength="20" autocomplete="off" name="firstname">
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control text-center"  minlength="3" maxlength="20" autocomplete="off" name="lastname">
                    </div>
                    <div class="form-group mb-4">
                        <label>Birthday</label>
                        <div class="datepicker date input-group">
                            <input type="text" autocomplete="off" placeholder="" class="form-control" id="date" name="birthday">
                              <div class="input-group-append">
                                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                              </div>
                        </div>
                    </div>
                    <!-- sex check -->
                    <div>
                        <label>You are: </label>
                    </div>
                    <div class="form-check-inline">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" value="Male">Male
                            </label>
                        </div>
                      <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" value="Female">Female
                            </label>
                      </div>
                    </div>
                    <div class="pt-3">
                        <button name="submit" type="submit" class="btn btn-success">Submit</button>     
                    </div>
                  </form>
              </div>
              <div id="custom-sizing" class="col-lg text-center p-5">
                <img src="gallery/sixth.jpg" class="img-fluid rounded" alt="dentinst-in-action">
              </div>
            </div>  
        </div>
      </div>
      <?php
           include 'cfg.php';
           //register-start
            if(isset($_POST['submit'])){
              $userN = $_POST['username'];
              $passW = $_POST['password'];
              $fnamE = $_POST['firstname'];
              $lnamE = $_POST['lastname'];
              $bday = $_POST['birthday'];
              $gender = $_POST['gender'];
              
              $sql = "insert INTO `register` (username,password,firstname,lastname,birthday,gender) 
              VALUES ('$userN','$passW','$fnamE','$lnamE','$bday','$gender')";
            
              $result = mysqli_query($con,$sql);
              if($result){
                echo "<script>
                alert('Registered Successfully! Redirecting To Login')
                window.location.href='login.php'
                </script>";
              }
              }
          //register-end
      ?>
      <!-- content ends -->
      <footer id="sticky-footer" class="flex-shrink-1 py-4 bg-dark text-white-50 pb-0">
        <div class="container text-center">
          <small>Copyright &copy; Primus Dental</small>
        </div>
      </footer> 
      
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