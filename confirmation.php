<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student Counselling </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">ONLINE-COUNSELLING</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="welcome.php">HOME</a></li>
          <li><a href="student.php">STUDENT</a></li>
          <li><a href="aboutus.php">ABOUT US</a></li>
          <li><a href="counsellors.php">COUNSELLORS</a></li>
          <li><a href="contactus.php">CONTACT US</a></li>
        </ul>
      </div>
    </div>
  </nav> 

  <?php
// (A) PROCESS RESERVATION
if (isset($_POST["date"])) {
  require "reserve.php";
  if ($_RSV->save(
    $_POST["date"], $_POST["slot"], $_POST["name"],
    $_POST["email"], $_POST["tel"], $_POST["notes"])) {
     echo "<div class='ok'>Reservation saved.</div>";
  } else { echo "<div class='err'>".$_RSV->error."</div>"; }
}
?>

<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Enter Video Call </h3><br>

  <p> Your meeting code is "RomanticCongregationsCallGuiltily "</p>

<p> <a href="https://meet.jit.si/" class="button">Join meeting room </a> <p>

</div>
  </body>
</html>