<?php
	session_start();
	if (!isset($_SESSION['username'])) {-
		header('Location: .?goto=login');
		exit;
	}
	$nav2 = 'active';
	include 'pages/templates/header.php';
	include 'pages/preview.php';
	include 'pages/templates/footer.php';
?>