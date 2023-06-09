<?php session_start() ?>
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
    <title>Reset Password</title>
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
            <a class="nav-link" href="login.php">Log in<span class="sr-only">(current)</span></a>
          </li> 
        </ul>
      </div>
      </nav>
      <!-- navbar ends -->
      <div id="flyIn" class="content-section text-center mb-3">
        <h1 class="display-4 pb-5">Forgot Your Password?</h1>
        <p>No worries, just enter your existing E-mail to recover your password!</p>
        <div class="container">
            <div class="row">
              <div id="custom-sizing" class="col-lg">
                <img id="rpwCustomImage" src="img/forgotpw.jpg" class="img-fluid rounded w-75" alt="dentinst-in-action">
              </div>
              <div id="custom-sizing" class="col-lg text-center pt-5">
              <form class="pt-2" method="POST" name="recover" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="text" class="form-control text-center" autocomplete="off" minlength="4" maxlength="100" name="email" required>
                    </div>
                    <div class="pt-3">
                        <button  name="recover" type="submit" class="btn btn-primary" value="login">Submit</button>          
                    </div>
                  </form>
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
       <!-- php -->
       <?php
            include 'cfg.php';
          
            if(isset($_POST["recover"])){
                $email = $_POST["email"];
        
                $sql = mysqli_query($con, "SELECT * FROM register WHERE email='$email'");
                $query = mysqli_num_rows($sql);
                $fetch = mysqli_fetch_assoc($sql);
        
                if(mysqli_num_rows($sql) <= 0){
                    ?>
                    <script>
                        alert("<?php  echo "Sorry, no emails exists "?>");
                    </script>
                    <?php
                }else if($fetch["status"] == 0){
                    ?>
                       <script>
                           alert("Sorry, your account must verify first, before you recover your password !");
                           window.location.replace("index.php");
                       </script>
                   <?php
                }else{
                    // generate token by binaryhexa 
                    $token = bin2hex(random_bytes(50));
        
                    //session_start ();
                    $_SESSION['token'] = $token;
                    $_SESSION['email'] = $email;
        
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
        
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
        
                    // 
                    $mail->Username='primusdentalproj@gmail.com';
                    $mail->Password='utqcomtrxhiakmcc';
        
                    // send by h-hotel email
                    $mail->setFrom('primusdentalproj@gmail.com', 'Password Reset');
                    // get email from input
                    $mail->addAddress($_POST["email"]);
                    //$mail->addReplyTo
        
                    // HTML body
                    $mail->isHTML(true);
                    $mail->Subject="Recover your password";
                    $mail->Body="<b>Dear User</b>
                    <h3>We received a request to reset your password.</h3>
                    <p>Kindly click the below link to reset your password</p>
                    https://me.stud.vts.su.ac.rs/authpw.php
                    <br><br>";
        
                    if(!$mail->send()){
                        ?>
                            <script>
                                alert("<?php echo " Invalid Email "?>");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("Check your E-mail for Activation Link!");
                                window.location.replace("index.php");
                            </script>
                        <?php
                    }
                }
            }
        ?>
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