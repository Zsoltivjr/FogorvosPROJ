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
    <link rel="stylesheet" href="style.css">
    <title>Appointment</title>
</head>
<body id="flyIn" class="text-dark container w-50 text-center">
<h1 class="display-4 pt-5">Make the corrections</h1>
<br>

<?php
session_start();
include 'cfg.php';

if(!$con){
    die(mysqli_error($con));
}
if(!isset($_SESSION['username'])){
    header('login.php');
}
$id=$_GET['updateid'];

//appointment-start
if(isset($_POST['submit'])){
    $desC = $_POST['description'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doc = $_POST['doctor'];

    $sql = "UPDATE appointment SET description='$desC',date='$date',time='$time',doctor='$doc' WHERE id='$id'";

    $result = mysqli_query($con,$sql);
    if($result){
        echo "<script>
                alert('Data Updated Successfully!')
                window.location.href='user.php'
                </script>";
    }
}
$sql = "SELECT * FROM appointment WHERE id=$id";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        $descOld = $row['description'];
        $dateOld = $row['date'];
        $timeOld = $row['time'];
        $docOld = $row['doctor'];
    }
}
?>
<div class="content-section text-center pb-3">
    <div class="container">
        <div class="row">
            <div id="custom-sizing" class="col-lg">
                <form name="myForm" method="POST" enctype="multipart/form-data">
                    <div class="form-group mt-5">
                        <label  class="form-label">Cause of the Problem</label>
                        <textarea class="form-control" autocomplete="off" id="description" rows="3"  name="description"><?php echo $descOld ?></textarea>
                    </div>
                    <!-- Date Picker -->
                    <div class="form-group mb-4">
                        <label class="form-label" >Current Date: <?php echo $dateOld ?></label>
                        <div class="datepicker date input-group">
                            <input type="text" autocomplete="off" placeholder="Choose Date" class="form-control" id="date" name="date" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="form-group mt-3 mb-3">
                        <label  class="form-label">Current Time: <?php echo $timeOld ?></label><br>
                        <select class="form-select" aria-label="Default select example" id="time" name="time">
                            <option selected value="">Open this select menu</option>
                            <option value="09-10">09-10</option>
                            <option value="10-11">10-11</option>
                            <option value="11-12">11-12</option>
                            <option value="12-13">12-13</option>
                            <option value="13-14">13-14</option>
                            <option value="15-16">15-16</option>
                            <option value="16-17">16-17</option>
                            <option value="17-18">17-18</option>
                            <option value="18-19">18-19</option>
                        </select>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label  class="form-label">Current Doctor: <?php echo $docOld ?></label><br>
                        <select class="form-select" aria-label="Default select example" id="doctor" name="doctor">
                            <option selected value="">Open this select menu</option>
                            <option value="Janos Orsos">Janos O.</option>
                            <option value="Dorka Krasnay">Dorka K.</option>
                        </select>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<!-- content ends -->
<footer id="sticky-footer" class="flex-shrink-0 mt-5">
    <div class="container text-center ">
        <p class="fw-bold text-dark">Copyright &copy; Dent-Express</p>
    </div>
</footer>
<!-- custom js -->
<script src="../script.js"></script>
<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="datepickerApp.js"></script>
</body>
</html>