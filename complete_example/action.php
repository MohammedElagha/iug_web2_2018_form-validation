<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {

	// Exist Validation
	if (isset($_GET['student_name']) && isset($_GET['student_email'])) {
		$std_name = $_GET['student_name'];
		$std_email = $_GET['student_email'];

		// Required Validation
		if (!empty($std_name) && !empty($std_email)) {
			$std_phone = $_GET['student_phone'];

			// Optional
			if (!empty($std_phone)) {
				echo "<h1>$std_name : $std_email : $std_phone</h1>";
			} else {
				echo "<h1>$std_name : $std_email</h1>";
			}

			// Length Validation
			if (strlen($std_name) > 10) {
				echo "<h1>Legal Name</h1>";
			} else {
				echo "<h1>Fake Name</h1>";
			}

			// Integer Validation
			if (ctype_digit($std_phone)) {
				echo "<h1>Legal Phone</h1>";
			} else {
				echo "<h1>Fake Phone</h1>";
			}

			// Regex Validation
			$regex = '/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/';

			if (preg_match($regex, $std_email)) {
				echo "<h1>Legal Email</h1>";
			} else {
				echo "<h1>Fake Email</h1>";
			}
		} else {
			echo "<h1>ERROR</h1>";
		}
	} else {
		echo "<h1>ERROR</h1>";
	}
}
?>