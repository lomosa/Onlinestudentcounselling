<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to Dashboard.</p>
<p><a href="dashboard.php">Home</a><p>
<p><a href="insert.php">Insert New Registration</a></p>
<p><a href="user2.php"> Insert New User <a> </p>
<p><a href="view.php">View Records</a><p>
<p><a href="view2.php"> View Users </a> <p>
<p><a href="logout.php">Logout</a></p>
<p> <a href="reports.php"> Reports</a></p>
</div>
</body>
</html>