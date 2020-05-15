<?php
	session_start();
	if (isset($_SESSION['username'])) {
		header('Location: .');
		exit;
	}
	include 'pages/login.php';
	include 'pages/templates/footer.php';
?>