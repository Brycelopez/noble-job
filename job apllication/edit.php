
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
	<?php $getUserBydentist_id = getUserBydentist_id($pdo, $_GET['dentist_id']); ?>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php?dentist_id=<?php echo $_GET['dentist_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getUserBydentist_id['first_name']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getUserBydentist_id['last_name']; ?>">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email" value="<?php echo $getUserBydentist_id['email']; ?>">
		</p>
		<p>
			<label for="firstName">phone_number</label> 
			<input type="text" name="phone_number" value="<?php echo $getUserBydentist_id['phone_number']; ?>">
		</p>
		<p>
			<label for="firstName">specialization</label> 
			<input type="text" name="specialization" value="<?php echo $getUserBydentist_id['specialization']; ?>">
		</p>
		<p>
			<label for="firstName">license_number</label> 
			<input type="text" name="license_number" value="<?php echo $getUserBydentist_id['license_number']; ?>">
		</p>
		<p>
			<label for="firstName">years_of_experience</label> 
			<input type="text" name="years_of_experience" value="<?php echo $getUserBydentist_id['years_of_experience']; ?>">
		</p>
		<p>
			<label for="firstName">clinic_specialization</label> 
			<input type="text" name=" clinic_specialization" value="<?php echo $getUserBydentist_id[' clinic_specialization']; ?>">
			<input type="submit" value="Save" name="editUserBtn">
		</p>
	</form>
</body>
</html>
