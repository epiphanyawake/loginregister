<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$con = new mysqli("localhost","localhost","root","lab2");
if($con->connect_error){
	die("Failed to connect: ".$con->connect_error);
}else{
	$stmt = $con->prepare("select * from registration where email = ?");
	$password = md5($password);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0 ){
		$data = $stmt_result->fetch_assoc();
		if($data['password'] === $password){
			 $_SESSION['firstName'] = $data['firstName'];
			 $_SESSION['lastName'] = $data['lastName'];
			 $_SESSION['email'] = $data['email'];
			 $_SESSION['gender'] = $data['gender'];
			 $_SESSION['city'] = $data['city'];
			 $_SESSION['country'] = $data['country'];
			 echo("<script>alert('Login Successfully!')</script>");
			 echo("<script>location.href = 'home.php'</script>");
			 
		} else{
			echo '<script>alert("Invalid password")</script>';
			echo '<script>alert("Please try again!")</script>';
			echo("<script>location.href = 'Login.html'</script>");
		}
	
	}else{
		echo '<script>alert("Invalid Email and/or Password!")</script>';
		echo '<script>alert("Please try again!")</script>';
		echo("<script>location.href = 'Login.html'</script>");

	}
}

?>