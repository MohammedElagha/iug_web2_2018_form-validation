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
				<form method="GET" action="action.php">
					<div class="form-group">
						<label for="student-name">Name</label>
						<input type="text" name="student_name" id="student-name" class="form-control">
					</div>
					<div class="form-group">
						<label for="student-email">Email</label>
						<input type="text" name="student_email" id="student-email" class="form-control">
					</div>
					<div class="form-group">
						<label for="student-phone">Phone</label>
						<input type="text" name="student_phone" id="student-phone" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>