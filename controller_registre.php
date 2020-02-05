<?php 
include('db.php');

if (isset($_POST['send'])) {
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = "INSERT INTO users(Name, Email, passw) VALUES ('$full_name', '$email', '$password')";
	$result = mysqli_query($conn, $query);

	if(!$result) {
		die("Query Failed.");
	}

	 $_SESSION['registre'] = 'Task Saved Successfully';
	 header('Location: index.php');
}






?>