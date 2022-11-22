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
     echo "<div class='ok'>Reservation saved. 
     <a href='confirmation.php'> Check Reservation Details </a></div>";
  } else { echo "<div class='err'>".$_RSV->error."</div>"; }
}
?>

<!-- (B) RESERVATION FORM -->
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
<h1>RESERVATION</h1>

<form id="resForm" method="post" target="_self">
<fieldset class="p-4">
  <div class="form-group"> 
  <label for="res_name"> Name </label>
  <input type="text" required name="name"/>
</div>

  <div class="form-group">
  <label for="res_email"> Email </label>
  <input type="email" required name="email" />

  <div class="form-group">
  <label for="res_tel"> Telephone Number </label>
  <input type="text" required name="tel" />
  </div>

  <div class="form-group">
  <label for="res_notes"> Notes (if any) </label>
  <input type="text" name="notes" />
</div>
  <?php
  // @TODO - MINIMUM DATE (TODAY)
  // $mindate = date("Y-m-d", strtotime("+2 days"));
  $mindate = date("Y-m-d");
  ?>

  <div class="form-group">
  <label>Reservation Date</label>
  <input type="date" required id="res_date" name="date" value="<?=date("Y-m-d")?>">
  </div>

  <div class="form-group">
  <label> Reservation Slot </label>
  <select name="slot">
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
  </div>
  <a href="confirmation.php" > 
  <input type="submit" value="Submit"/>
</a>



</fieldset>
</form>
</div>
            </div>
        </div>
    </div>
</section>
 

</body>
</html>