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
    <title>Doctors Page</title>
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
              <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Log out<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navbar ends -->
      <div id="flyIn" class="content-section text-center mb-3">
        <h1 class="display-4 pb-5">Check out Our Doctors</h1>
        <p>No worries, just enter your existing Username and Your Birthday, then enter a New Password to visit Primus Dental!</p>
        <div class="container">
            <div class="row border-bottom pb-1">
              <div id="custom-sizing" class="col-lg">
                <img id="rpwCustomImage" src="img/jani.jpg" class="img-fluid rounded w-75" alt="dentinst-in-action">
              </div>
              <div id="custom-sizing" class="col-lg text-left pt-5">
                <h2 class="pt-3">Dr. Janos Orsos</h2>
                <p class="pt-3">
                  Dr. Janos Orsos is a highly skilled and compassionate dental doctor with years of experience in providing exceptional oral healthcare.
                  <br><div class="pt-3 pb-3"> With his warm and friendly demeanor, he creates a welcoming environment for his patients, putting them at ease from the moment they step into his clinic.
                  Dr. Orsos obtained his Doctor of Dental Surgery (DDS) degree from a renowned dental school and has since dedicated his career to improving the smiles and oral health of his patients. He stays 
                  up-to-date with the latest advancements in dentistry and continually expands his knowledge through attending conferences and engaging in professional development opportunities.</div>
                  <br>Known for his meticulous attention to detail, Dr. Orsos takes a personalized approach to each patient, carefully assessing their needs and creating tailored treatment plans. He believes in the power of patient education and takes the time to explain procedures and answer any questions, ensuring his patients are well-informed and comfortable throughout their dental journey.
                  <div class="pt-5 pb-3"> From routine check-ups and cleanings to complex restorative treatments, 
                  Dr. Orsos offers a wide range of services to address his patients' dental concerns. Whether it's a
                  simple filling, teeth whitening, or a full smile makeover, He combines his technical expertise with 
                  an artistic eye to deliver stunning and natural-looking results.</div>
                </p>
              </div>
            </div>  
            <div class="row border-bottom pb-1">
              <div id="custom-sizing" class="col-lg">
                <img id="rpwCustomImage" src="img/dorka.jpg" class="img-fluid rounded w-75" alt="dentinst-in-action">
              </div>
              <div id="custom-sizing" class="col-lg text-left pt-5">
                <h2 class="pt-3">Dr. Dorka Krasnay</h2>
                <p class="pt-3">
                  Dr. Dorka Krasnay is an experienced and highly skilled dental doctor with a passion for providing exceptional dental care to her patients.
                    <br><div class="pt-3 pb-3"> 
                    With over 15 years of practice in the field, Dr. Krasnay has established herself as a trusted professional in her community.
                    Dr. Krasnay holds a Doctor of Dental Surgery (DDS) degree from a prestigious dental school, where she graduated with top honors. She constantly strives to stay at the forefront of the latest advancements in dentistry by attending conferences, workshops, and continuing education courses. Her commitment to ongoing learning ensures that she can provide her patients with the most up-to-date and effective treatments available.</div>
                    <br>Known for her gentle and caring approach, Dr. Krasnay believes in building strong relationships with her patients based on trust and open communication. She takes the time to listen to their concerns, thoroughly explains treatment options, and collaborates with them to develop personalized treatment plans that address their unique needs and goals.
                    <div class="pt-5 pb-3"> Dr. Krasnay's expertise spans a wide range of dental services, including preventive care, restorative dentistry, cosmetic dentistry, and orthodontics. Whether she is performing routine check-ups and cleanings, filling cavities, placing dental implants, or straightening teeth with braces or clear aligners, Dr. Krasnay's attention to detail and commitment to excellence shine through in every aspect of her work.</div>
                </p>
              </div>
            </div>  
        </div>
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