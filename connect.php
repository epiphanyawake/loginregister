<?php
session_start();
$firstName = $_POST	['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$country = $_POST['country'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if (!empty($firstName)|| !empty($lastName)|| !empty($email)|| !empty($gender)|| !empty($city)|| !empty($country)|| !empty($password)|| !empty($cpassword)) {
	$host = "localhost";
	$dbUsername = "localhost";
	$dbPassword = "root";
	$dbname = "lab2";

	$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else{
		$SELECT = "SELECT email from registration where email = ? limit 1";
		$password = md5($password); 
		$cpassword = md5($cpassword); 
		$INSERT = "INSERT into registration(firstName, lastName, email, gender, city, country, password, cpassword) values (?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
	}
		
		if($password==$cpassword){

			if($rnum==0){
				$stmt = $conn->prepare($INSERT);
				$stmt ->bind_param("ssssssss", $firstName, $lastName, $email, $gender, $city, $country, $password, $cpassword);
				$stmt->execute();
				echo '<script>alert("Registration Successfully!")</script>';
				echo ("<script>location.href = 'Login.html'</script>");
					
			}else{
				echo '<script>alert("Email already exists")</script>';
				echo '<script>alert("Please try again!")</script>';
				echo ("<script>location.href = 'Registration.html'</script>");
			}
			$stmt->close();
			$conn->close();
			
		}else{
			echo '<script>alert("Password is incorrect")</script>';
			echo '<script>alert("Please try again!")</script>';
			echo ("<script>location.href = 'Registration.html'</script>");
		}

}else{
	echo "All Field are Required";
	die();
}
?>