<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<title><?php echo isset($pageTitle)? $pageTitle : 'Library'; ?></title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" />
	<link rel="shortcut icon" type="image/png" href="images/brand.png" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/page.css" />
	<link rel="stylesheet" type="text/css" href="css/browse.css" />
	<link rel="stylesheet" type="text/css" href="css/history.css" />
	<link rel="stylesheet" type="text/css" href="css/welcome.css" />
</head>
<body>
	<header class="line">
		<div class="container">
			<div id="brand-container">
				<img src="images/brand.png" />
				<h1 style="display: inline-block;">Library</h1>
			</div>
		</div>
	</header>
	<nav class="line">
		<div class="container">
			<div id="nav-container">
				<div><?php echo '<a class="btn btn-0 '.(isset($nav1)? $nav1 : '').'" href=".">Welcome</a>'; ?></div>
				<div><?php echo '<a class="btn btn-0 '.(isset($nav2)? $nav2 : '').'" href=".?goto=browse">Browse</a>'; ?></div>
				<div><?php echo '<a class="btn btn-0 '.(isset($nav3)? $nav3 : '').'" href=".?goto=history">History</a>'; ?></div>
				<div><?php echo '<a class="btn btn-0 '.(isset($nav4)? $nav4 : '').'" href=".?goto=profile">Profile</a>'; ?></div>
				<div><?php echo '<a class="btn btn-1 '.(isset($nav5)? $nav5 : '').'" href="includes/logout_check.php">Log out</a>'; ?></div>
			</div>
		</div>
	</nav>
	<main>
		<div class="container">