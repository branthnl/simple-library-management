<?php
	session_start();
	if (!isset($_SESSION['username'])) {-
		header('Location: .?goto=login');
		exit;
	}
	$nav3 = 'active';
	include 'pages/templates/header.php';
	include 'pages/history.php';
	include 'pages/templates/footer.php';
?>