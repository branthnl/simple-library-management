<?php
	$goto = isset($_GET['goto'])? $_GET['goto'] : 'welcome';

	session_start();
	if (!isset($_SESSION['username'])) {-
		$goto = 'login';
	}

	switch ($goto) {
		case 'login':
			$pageTitle = 'Login';
			header('Location: Login.php');
			break;

		case 'browse':
			$pageTitle = 'Browse';
			header('Location: Browse.php');
			break;

		case 'history':
			$pageTitle = 'History';
			header('Location: History.php');
			break;

		case 'profile':
			$pageTitle = 'Profile';
			header('Location: Profile.php');
			break;

		case 'welcome':
			$pageTitle = 'Welcome';
			header('Location: Welcome.php');
			break;

		default:
			$pageTitle = 'Not Found';
			header('Location: NotFound.php');
			break;

	}
?>