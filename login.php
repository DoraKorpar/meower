<?php

	session_start();

	if ($_POST['login']) {

		$username = "User";
		$password = "password";
		$id = "1";

		$use_input = strip_tags($_POST['login']);
		$pass_input = strip_tags($_POST['password']);

		if ($_POST['login'] == $username && $_POST['password'] == $password) {

			$_SESSION['loggedin'] = 1;
			$_SESSION['login'] = $username;
			$_SESSION['id'] = $id;

			header("Location: index.php");
		} else {
			echo "Invalid information";
		}
	}
?>

<html>
<head>
	<title></title>
</head>
<body>
<div>
	<h2>Log in:</h2>
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
