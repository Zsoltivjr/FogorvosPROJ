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
    <title>Appointment</title>
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
            session_start();
            include 'cfg.php'; 
            if(!isset($_SESSION['username'])){
                header('location:login.php');
            }
            $username = $_SESSION['username'];
            if ($username == 'superuser'){
              echo ' <li class="nav-item active">
              <a class="nav-link text-warning" href="admin/admin.php">Admin<span class="sr-only">(current)</span></a>
            </li>';
            }
            if ($username == 'jani'){
              echo ' <li class="nav-item active">
              <a class="nav-link text-warning" href="admin/doctorpanel.php">Visit Appointments<span class="sr-only">(current)</span></a>
            </li>';
            }
            if ($username == 'dorka'){
              echo ' <li class="nav-item active">
              <a class="nav-link text-warning" href="admin/doctorpanel.php">Visit Appointments<span class="sr-only">(current)</span></a>
            </li>';
            }
              ?>
            <li class="nav-item active">
              <a class="nav-link" href="user.php">My Profile<span class="sr-only">(current)</span></a>
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
      <?php
          //appointment-start
            if(isset($_POST['submit'])){
              $user = $_SESSION['username'];
              $firstName = $_SESSION['firstname'];
              $lastName = $_SESSION['lastname'];
              $bday = $_SESSION['bday'];
              $gender = $_SESSION['gender'];
              $desC = $_POST['description'];
              $date = $_POST['date'];
              $doc = $_POST['doctor'];
              
              $sql = "insert INTO appointment (user,firstname,lastname,birthday,gender,description,date,doctor) 
              VALUES ('$user','$firstName','$lastName','$bday','$gender','$desC','$date','$doc')";

              $result = mysqli_query($con,$sql);
              echo "<script>
              alert('Your Appointment has been successfully booked!Redirecting to Your Profile!')
              window.location.href='user.php'
              </script>";
            }
          //appointment-end
      ?>
      <!-- welcome ends -->
      <div id="flyIn" class="content-section text-center pb-3">
        <h1 class="display-4 pb-5">Reserve Your Appointment, <?php echo ucfirst($_SESSION['firstname']); ?>!</h1>
        <p>To schedule your appointment, please use our convenient online booking system. <br>
            Our friendly and knowledgeable team will be happy to assist you in finding a time that works best for your schedule.</p>
        <div class="container">
            <div class="row">
              <div id="custom-sizing" class="col-lg p-5">
                <form name="myForm" method="POST" onsubmit="return checkData()" enctype="multipart/form-data">
                  <div class="form-group mt-5">
                    <label  class="form-label">Cause of the Problem</label>
                    <textarea class="form-control" autocomplete="off" id="description" rows="3" name="description"></textarea>
                  </div>
                  <!-- Date Picker -->
                  <div class="form-group mb-4">
                      <label class="form-label" >Date</label>
                        <div class="datepicker date input-group">
                          <input type="text" autocomplete="off" placeholder="Choose Date" class="form-control" id="date" name="date">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                  </div>
                  <div class="form-group mt-3 mb-3">
                  <label  class="form-label">Choose a Doctor</label><br>
                    <select class="form-select" aria-label="Default select example" id="doctor" name="doctor">
                      <option selected value="">Open this select menu</option>
                      <option value="Janos Orsos">Janos O.</option>
                      <option value="Dorka Krasnay">Dorka K.</option>
                    </select>
                  </div>
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                  </form>
              </div>
              <div id="custom-sizing" class="col-lg text-center p-5">
                <img src="img/appointment.jpg" class="img-fluid rounded" alt="dentinst-in-action">
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