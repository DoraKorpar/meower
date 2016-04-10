<?php
	session_start();

	if ($_GET['login']) {

		if ($_POST['username'] == 'USERNAME' && $_POST['password'] == 'PASSWORD') {

			$_SESSION['loggedin'] = 1;

			header("Location: index.php");
			exit;
		} else echo "Information doesn't match";
	}
?>

Log in:
<form action="?login=1" method="post">
Username: <input type="text" name="login" />
Password: <input type="password" name="password" />
<input type="submit" />
</form>