<div id="heading-container">
	<h1 class="mb-3">Profile</h1>
	<?php
		include 'includes/config.php';
		$row = 'Unknown';
		$role_id = isset($_SESSION['role_id'])? $_SESSION['role_id'] : 1;
		$query = "SELECT role_name FROM roles WHERE role_id=$role_id";
		$result = mysqli_query($db, $query);
		while ($row=mysqli_fetch_row($result)) {
			$role = $row[0];
		}
		$article = 'a';
		if (in_array(strtolower($role[0]), ['a', 'i', 'u', 'e', 'o'])) {
			$article = 'an';
		}
		echo '<h3>Your username is <button class="btn btn-1 active round fn-3" disabled="disabled">'.$_SESSION['username'].'</button>, and you are '.$article.' <button class="btn btn-3 active round fn-3" disabled="disabled">'.$role.'</button>.</h3>';
	?>
</div>