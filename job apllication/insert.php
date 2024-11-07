<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email">
		</p>
		<p>
			<label for="firstName">phone_number</label> 
			<input type="text" name="phone_number">
		</p>
		<p>
			<label for="firstName">specialization</label> 
			<input type="text" name="specialization">
		</p>
		<p>
			<label for="firstName">license_number</label> 
			<input type="text" name="license_number">
		</p>
		<p>
			<label for="firstName">years_of_experience</label> 
			<input type="text" name="years_of_experience">
		</p>
		<p>
			<label for="firstName">clinic_specialization</label> 
			<input type="text" name=" clinic_specialization">
			<input type="submit" name="insertUserBtn">
		</p>
	</form>
</body>
</html>