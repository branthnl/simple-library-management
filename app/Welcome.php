<?php
	session_start();
	if (!isset($_SESSION['username'])) {-
		header('Location: .?goto=login');
		exit;
	}
	$nav1 = 'active';
	include 'pages/templates/header.php';
	include 'pages/welcome.php';
	include 'pages/templates/footer.php';
?>