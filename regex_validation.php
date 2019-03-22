<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form method="POST" action="">
					<div class="form-group">
						<label for="product-name">User Name</label>
						<input type="text" name="user_name" id="user-name" class="form-control">
					</div>
					<div class="form-group">
						<label for="user-email">User Email</label>
						<input type="text" name="user_email" id="user-email" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['user_name']) 
		&& isset($_POST['user_email'])) {

		$user_email = $_POST['user_email'];
		$regex = '/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/';

		if (preg_match($regex, $user_email, $match)) {
			// continue in your code
		} else {
			// Go to fault
		}

	} else {
		// Go to fault
	}
}
?>