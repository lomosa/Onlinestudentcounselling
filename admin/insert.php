<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'counselling');

    
    $date = "";
    $slot = "";
    $name = "";
    $email = " ";
    $tel = "";
    $notes = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
        
        $date =$_POST["res_date"];
        $slot = $_POST['res_slot'];
        $name = $_POST['res_name'];
        $email = $_POST['res_email'];
        $tel = $_POST['res_tel'];
        $notes = $_POST['res_notes'];

		mysqli_query($db, "INSERT INTO reservations (res_date, res_slot, res_name, res_email, res_tel, res_notes, ) VALUES ('$date', '$slot','$name', '$email', '$tel', '$notes')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: view.php');
	} 

// $status = "";
// if(isset($_POST['new']) && $_POST['new']==1){

    //$date = date("Y-m-d H:i:s");
   // $slot = $_REQUEST['res_slot'];
    //$name =  $_REQUEST['res_name'];
    //$email =  $_REQUEST['res_email'];
   // $tel =  $_REQUEST['res_tel'];
   // $notes =  $_REQUEST['res_notes'];
    //$submittedby = $_SESSION["username"];
    //$ins_query="INSERT INTO `reservations` 
    //(`res_date`, `res_slot`, `res_name`, `res_email`, `res_tel`, `res_notes`, `submittedby`) VALUES 
    //('$date', '$slot', '$name', '$email', '$tel', '$notes','$submittedby')";
    //mysqli_query($con,$ins_query)
    //or die(mysql_error());
    //$status = "New Record Inserted Successfully.
    //</br></br><a href='view.php'>View Inserted Record</a>";
//}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Reservation</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <nav>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Reservations</a>
|  <a href="user2.php">View Users</a> 
| <a href="logout.php">Logout</a></p>
<nav>
<div>
<h1>Insert New Reservations </h1>
<form id="resForm" method="post" target="_self">
  <div class="form-group"> 
  <label for="res_name">Name</label>
  <input type="text" required name="name" value="John Doe"/>
</div>

  <div class="form-group">
  <label for="res_email">Email</label>
  <input type="email" required name="email" value="john@doe.com"/>

  <div class="form-group">
  <label for="res_tel">Telephone Number</label>
  <input type="text" required name="tel" value="123456789"/>
  </div>

  <div class="form-group">
  <label for="res_notes">Notes (if any)</label>
  <input type="text" name="notes" value="Testing"/>
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
  <label>Reservation Slot</label>
  <select name="slot">
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
  </div>
  <input type="submit" value="Submit"/>
</form>
<p style="color:#FF0000;"><?php></p>
</div>
</div>
</body>
</html>
