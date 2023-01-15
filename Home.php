<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

body {
	margin: 0;
    font-family: sans-serif;

}

.login-controls{
	padding: 52px;
	display:flex;
	justify-content:center;
}

.btn-submit {
	background-color: #0c0c0c;
    color: white;
    border-radius: 25px;
    font-weight: bold;
    width: 112px;
    font-family: inherit;
    font-size: 17px;
    height: 40px;
}

.btn-submit:hover {
	color: white;
    opacity: .8;
    cursor: pointer;
}

.text{
	font-size:50px;
}

</style>

	<body>
		<div class="login-controls" style="margin-top:10%">
			<p class="text" style="font-weight:bold">Welcome!&nbsp</p>	
			<p class="text" style="font-style:italic;font-weight:bold">
				<?php
					//user's first name will appear after the greetings
					if (isset($_SESSION['firstName'])) {
						print "" . $_SESSION['firstName'];}
					
					if (!isset($_SESSION['firstName'])) {
						$guest='Guest';
						print($guest);}
				?>
			</p>
			<p class="text" style="font-weight:bold;margin-left:5px">!</p>
		</div>	
		  
		<div class="login-controls" style="margin-top:-10%">
			<a href="login.html"><button class="btn-submit">Logout
			<?php 
			session_destroy(); 
			?>					
			</button></a>
		</div>
	</body>	
</html>
