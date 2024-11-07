
<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserBydentist_id = getUserBydentist_id($pdo, $_GET['dentist_id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $getUserBydentist_id['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getUserBydentist_id['last_name']; ?></h2>
		<h2>Email: <?php echo $getUserBydentist_id['email']; ?></h2>
		<h2>phone_number: <?php echo $getUserBydentist_id['phone_number']; ?></h2>
		<h2>specialization: <?php echo $getUserBydentist_id['specialization']; ?></h2>
		<h2>license_number: <?php echo $getUserBydentist_id['license_number']; ?></h2>
		<h2>years_of_experience: <?php echo $getUserBydentist_id['years_of_experience']; ?></h2>
		<h2>clinic_specialization: <?php echo $getUserBydentist_id[' clinic_specialization']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?dentist_id=<?php echo $_GET['dentist_id']; ?>" method="POST">
				<input type="submit" name="deleteUserBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>
