<?php
	session_start();
	if (!isset($_SESSION['username'])) {-
		header('Location: .?goto=login');
		exit;
	}
	$nav4 = 'active';
	include 'pages/templates/header.php';
	include 'pages/profile.php';
	include 'pages/templates/footer.php';
?>