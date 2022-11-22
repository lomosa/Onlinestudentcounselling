<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'counselling');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO users (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: user.php');
	}

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
    
        mysqli_query($db, "UPDATE users SET name='$name', address='$address' WHERE id=$id");
        $_SESSION['message'] = "Address updated!"; 
        header('location: index.php');
    }