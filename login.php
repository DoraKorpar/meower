<?php

	session_start();

	$username = "User";
	$password = "password";
	$id = "1";

	$use_input = strip_tags($_POST['login']);
	$pass_input = strip_tags($_POST['password']);

	if ($use_input == $username && $pass_input == $password) {

		$_SESSION['loggedin'] = 1;
		$_SESSION['login'] = $username;
		$_SESSION['id'] = $id;

		header("Location: index.php");
	} else {
		echo "Invalid information";
	}
?>

<html>
<head>
	<title>Log-In Page</title>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="login.css" />
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="header">
		<div id="logo">
			<img id="kitten" src="https://cloud.githubusercontent.com/assets/15206187/14062361/7b399324-f359-11e5-9598-d712f8cb36bf.png" alt="meower logo black color" />
			<h1 id="tagline">MEOWER</h1>
		</div>
	</div>
	<div id="form-div">
		<h2>Please log in below</h2>
		<form action="index.php" method="post" enctype="multipart/form-data">
			Username: <br/>
			<input type="text" name="login" /><br/>
			Password: <br/>
			<input type="password" name="password" /><br/>
			<input type="submit" value="Login" name="Submit" />
		</form>
	</div>
</body>
</html>

<?php


?>
