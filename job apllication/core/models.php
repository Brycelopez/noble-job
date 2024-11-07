<?php  

require_once 'dbConfig.php';

function getAllUsers($pdo) {
	$sql = "SELECT * FROM Dentists 
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getUserBydentist_id($pdo, $dentist_id) {
	$sql = "SELECT * from Dentists WHERE dentist_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$dentist_id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForAUser($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM Dentists WHERE 
			CONCAT(first_name,last_name,email,phone_number,
				specialization,license_number,years_of_experience,clinic_specialization,date_added) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewUser($pdo, $first_name, $last_name, $email, 
	$phone_number, $specialization, $license_number, $years_of_experience, $clinic_specialization) {

	$sql = "INSERT INTO Dentists 
			(
				first_name,
				last_name,
				email,
				phone_number,
				specialization,
				license_number,
				years_of_experience,
				clinic_specialization
			)
			VALUES (?,?,?,?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$first_name, $last_name, $email, 
		$phone_number, $specialization, $license_number, 
		$years_of_experience, $clinic_specialization,
	]);

	if ($executeQuery) {
		return true;
	}

}

function editUser($pdo, $first_name, $last_name, $email, $phone_number, 
	$specialization, $license_number, $years_of_experience, $clinic_specialization, $dentist_id) {

	$sql = "UPDATE Dentists
				SET first_name = ?,
					last_name = ?,
					email = ?,
					phone_number = ?,
					specialization = ?,
					license_number = ?,
					years_of_experience = ?,
					clinic_specialization = ?
				WHERE id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone_number, 
		$specialization, $license_number, $years_of_experience,$clinic_specialization, $dentist_id]);

	if ($executeQuery) {
		return true;
	}

}


function deleteUser($pdo, $dentist_id) {
	$sql = "DELETE FROM Dentists 
			WHERE dentist_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$dentist_id]);

	if ($executeQuery) {
		return true;
	}
}




?>