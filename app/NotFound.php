<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: .?goto=login');
		exit;
	}
	include 'pages/templates/header.php';
	include 'pages/notfound.php';
	include 'pages/templates/footer.php';
?>