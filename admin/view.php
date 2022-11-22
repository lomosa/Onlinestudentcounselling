<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav>
    <p><a href="dashboard.php">Home</a>
<a href="user2.php">Insert User</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
</nav>    
<div class="form">

<h2>View Reservation Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Date</strong></th>
<th><strong>Slot</strong></th>
<th><strong>Email</strong></th>
<th><strong>Tel</strong></th>
<th><strong>Notes</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from reservations ORDER BY res_id desc ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["res_id"]; ?></td>
<td align="center"><?php echo $row["res_date"]; ?></td>
<td align="center"><?php echo $row["res_slot"]; ?></td>
<td align="center"><?php echo $row["res_email"]; ?></td>
<td align="center"><?php echo $row["res_tel"]; ?></td>
<td align="center"><?php echo $row["res_notes"]; ?></td>
<td align="center">
<a href="edit.php?res_id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?res_id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>