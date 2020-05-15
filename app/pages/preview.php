<?php
	$preview_id = isset($_GET['q'])? $_GET['q'] : null;
	if (empty($preview_id) || !is_numeric($preview_id)) {
		$preview_id = null;
	}
?>
<div id="heading-container">
	<form class="mb-4" id="search-form" action="browse.html" method="get">
		<input class="form-control" type="text" name="q" autocomplete="off">
		<button class="form-control btn btn-0" type="submit">Search</button>
	</form>
	<h1>Preview: <?php echo is_null($preview_id)? '-' : '#'.$preview_id; ?></h1>
</div>
<div id="content-container">
	<img src="img/olly-moss-harry-potter-poster-chamber-of-secrets.jpg" height="200px">
	<h3>Title</h3>
	<p class="mb-4">Harry Potter</p>
	<h3>Author</h3>
	<p class="mb-4">J.K Rowling</p>
	<h3>Abstract</h3>
	<p class="mb-4">This is the abstract. Bla bla bla. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<h3>More details</h3>
	<div style="overflow-x: auto;">
		<table class="my-table mb-4" border="1px">
			<thead>
				<tr>
					<th>Book ID</th>
					<th>Category</th>
					<th>ISBN</th>
					<th>Stock</th>
					<th>Shelf</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>249</td>
					<td>Fantasy</td>
					<td>1249012309847</td>
					<td>1</td>
					<td>East</td>
				</tr>
			</tbody>
		</table>
	</div>
	<a class="btn btn-1 active fn-3" href="history.html">Book Ordered</a>
</div>