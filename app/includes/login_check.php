<?php
	include 'config.php';

	$username = isset($_POST['username'])? $_POST['username'] : null;
	$password = isset($_POST['password'])? $_POST['password'] : null;

	if (is_null($username) || empty($username)) {
		# Please fill in username!
	}
	elseif (is_null($password) || empty($password)) {
		# code...
	}
	else {
		$query = "SELECT password, role_id FROM users WHERE username='$username'";
		$result = mysqli_query($db, $query);
		while ($row=mysqli_fetch_array($result)) {
			$pass = $row[0];
			if ($password == $pass) {
				// Login successful
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['role_id'] = $row[1];
				header('Location: ../.');
				exit;
			}
			else {
				# Login failed
				header('Location: ../Login.php?wrongpass='.$username);
				exit;
			}
		}
		header('Location: ../Login.php?usernotfound='.$username);
	}

?>