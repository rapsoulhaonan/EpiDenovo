<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])) {
	if(empty($_POST['user']) || empty($_POST['pass'])) {
		$error = "Username or Password is invalid!";
	}
	else {
		//Define $user and $pass
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		//Establishing Connection with server by passing server_name, user_id and pass as a parameter
		$conn = mysqli_connect("localhost", "root", "");
		//Selecting Database
		$db = mysqli_select_db($conn, "users");
		//sql query to fetch information of registered user and finds user match
		$query = mysqli_query($conn, "SELECT * FROM login WHERE user='$user' AND pass='$pass'");
		
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			header("Location: index.php"); // Redirecting to the other page
		}
		else {
			$error = "Username or Password is Invalid!";
		}
		mysqli_close($conn); // Closing connection
	}
}
?>