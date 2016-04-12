<?php
	include_once 'dbconfig.php';

?>

<!DOCTYPE html>

<html>
	<head>

		<meta charset="UTF-8">
		<title></title>
		<script src=""></script>

	</head>

	<body>

		<header>

		</header>

		<main>
			<form name="newProject" method="POST">

				<label for="project_name">Project Name: </label>
				<input type="text" name="project_name">

				<br><br>

				<label for="cats">Category: </label>
				<select name="cats">
					<option value="">Select</option>
					<?php

						$project->Cats();
					?>
				</select>

				<br><br>

				<label for="status">Status: </label>
				<select name="status">
					<option value="">Select</option>
					<?php

						$project->Status();
					?>
				</select>

				<br><br>

				<label for="star_date">Start Date: </label>
				<input type="date" name="start_date" value="<?php echo date('Y-m-d'); ?>">

				<br><br>

				<label for="end_date">Estimated End Date: </label>
				<input type="date" name="end_date">

			</form>
		</main>

		<footer>

		</footer>

	</body>
</html>