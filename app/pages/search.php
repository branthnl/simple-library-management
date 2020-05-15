<?php
	$q = isset($_GET['q'])? $_GET['q'] : '';

	$q = explode('+', $q);
	$q = implode(' ', $q);

	echo '<div id="heading-container">';
	echo '	<form class="mb-4" id="search-form" action="Search.php" method="get">';
	echo '		<input class="form-control" type="text" value="'.$q.'" name="q" autocomplete="off">';
	echo '		<button class="form-control btn btn-0" type="submit">Search</button>';
	echo '	</form>';
	echo '	<h1>Search: "'.$q.'"</h1>';
	echo '</div>';

	echo '<div id="content-container">';

	include 'includes/config.php';

	$query = "SELECT * FROM books WHERE title LIKE '$q'";
	$result = mysqli_query($db, $query);

	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			while ($row=mysqli_fetch_assoc($result)) {
				echo '<div class="book-card round">';
				echo '	<h3>'.$row['title'].'</h3>';
				echo '	<h5 class="mb-3">'.$row['author'].'</h5>';
				echo '	<h5 class="btn btn-3 round">Available</h5>';
				echo '	<h5 class="btn btn-5 round">'.$row['category'].'</h5>';
				echo '	<h5 class="btn btn-0 round mb-3">ISBN: '.$row['isbn'].'</h5>';
				echo '	<br />';
				echo '	<a class="btn btn-0 round fn-3" href="Preview.php?q='.$row['book_id'].'">Preview this book</a>';
				echo '</div>';
			}
		}
	}

	echo '</div>';
?>