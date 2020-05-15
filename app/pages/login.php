<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" />
	<link rel="shortcut icon" type="image/png" href="images/brand.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
	<main>
		<div id="container">
			<div id="form-container">
				<form action="includes/login_check.php" method="post">
					<h1 class="mb-3">Login</h1>
					<input class="form-control block mb-3" type="text" id="username" name="username" placeholder="Username" autocomplete="off" required="required" />
					<input class="form-control block mb-3" type="password" id="password" name="password" placeholder="Password" autocomplete="off" required="required" />
					<div style="text-align: center;">
						<button class="btn btn-0 mb-3" type="submit">Login</button>
					</div>
				</form>
			</div>
			<?php
				$uservalue = '';
				$wrongpass = isset($_GET['wrongpass'])? $_GET['wrongpass'] : null;
				$usernotfound = isset($_GET['usernotfound'])? $_GET['usernotfound'] : null;
				if (!is_null($wrongpass)) {
					$uservalue = $wrongpass;
					echo '<div class="prompt prompt-1">Username is found but wrong password</div>';
				}
				elseif (!is_null($usernotfound)) {
					$uservalue = $usernotfound;
					echo '<div class="prompt prompt-2">Username not found</div>';
				}
				echo '<script type="text/javascript">';
				echo 	'document.getElementById("username").value = "'.$uservalue.'"';
				echo '</script>';
			?>
