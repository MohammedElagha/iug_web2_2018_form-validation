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
						<label for="product-name">Product Name</label>
						<input type="text" name="product_name" id="product-name" class="form-control">
					</div>
					<div class="form-group">
						<label for="product-description">Product Description</label>
						<input type="text" name="product_description" id="product-description" class="form-control">
					</div>
					<div class="form-group">
						<label for="product-price">Product Price</label>
						<input type="number" name="product_price" id="product-price" class="form-control">
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
	if (isset($_POST['product_name']) 
		&& isset($_POST['product_description']) 
		&& isset($_POST['product_price'])) {

		$product_price = $_POST['product_price'];

		if (is_numeric($product_price)) {
			// continue in your code
		} else {
			// Go to fault
		}

	} else {
		// Go to fault
	}
}
?>