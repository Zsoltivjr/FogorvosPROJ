<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/clean.png"/>
    <link rel="preload" href="img/registered.jpg" as="image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <title>Primus Dental</title>
</head>
<body>
    <nav class="justify-content-center text-center navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Primus Dental</a>
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
      <div class="registered-section text-center">
        <h1 id="flyIn" class="display-4">Welcome to Primus Dental <br> <?php echo ucfirst($_SESSION['firstname']); ?></h1>
        <p id="flyIn" class="text-uppercase"> congratulations on your registration! Please book your appointment!</p>
            <a href="appointment.php"><button id="appointment" type="button" class="btn btn-danger">Make an Appointment!</button></a> 
      </div>
      <!-- welcome ends -->
      <div class="content-section text-center">
        <h1 class="display-4">Don't hesitate, contact us!</h1>
        <div class="container">
            <div class="row">
              <div class="col-lg">
                <img src="img/content1.jpg" class="img-fluid rounded" alt="dentinst-in-action">
              </div>
              <div class="col-lg text-left p-5">
                <p>Our practice offers a wide range of dental services, including routine cleanings and exams, restorative dentistry, 
                    cosmetic dentistry, and more. Our team of experienced dentists uses the latest technology and techniques 
                    to ensure that our patients receive the highest quality care possible.
                    <br> <br>
                    At our practice, we believe that a healthy and beautiful smile can greatly enhance your quality of life. That's why we 
                    take a comprehensive approach to dental care, addressing not only your oral health but also your overall well-being.
                    <br> <br>
                    Our team is committed to building long-lasting relationships with our patients based on trust and mutual respect. 
                    We take the time to listen to your concerns and answer any questions you may have, so you can feel confident and informed about your dental care.
                    <br> <br>
                    Whether you're in need of a routine cleaning or more complex dental work, we're here to help. Contact us today to schedule an appointment and experience
                    the difference our dental team can make in your oral health and overall well-being.
                </p>
              </div>
            </div>  
        </div>
      </div>
          <!-- content ends -->
          <div class="content-section bg-dark text-light text-center p-5">
        <div class="intro">
          <h1 class="display-4">Primus Dental</h1>
        </div>
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/first.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/first.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/second.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/second.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/third.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/third.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/fourth.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/fourth.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/fifth.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/fifth.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/sixth.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/sixth.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/seventh.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/seventh.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="gallery/eight.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="gallery/eight.jpg"></a></div>
        </div>
        <p class="pt-5">Whether you need a routine cleaning or a more complex dental procedure, we are here to help you achieve and maintain optimal 
          <br> oral health. Contact us today to schedule your appointment and take the first step toward a healthier, happier smile.</p>
    </div>
</div>
      <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
          <small>Copyright &copy; Primus Dental</small>
        </div>
      </footer> 
    <!-- footer ends -->
    <!-- /// -->
    <!-- custom js -->
    <script src="script.js"></script>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
    <!-- lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script> 
</body>
</html>