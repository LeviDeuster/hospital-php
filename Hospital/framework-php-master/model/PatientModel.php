<?php

function getPatient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);

    $params = array(':id' => $id);
    $query->execute($params);



	$db = null;

	return $query->fetch();
}

function getAllPatients()
{
	$db = openDatabaseConnection();

    $sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editPatient()
{
	$name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	$client = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	$id = isset($_POST['patient_id']) ? $_POST['patient_id'] : null;
	
	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($client) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :name, species_id = :species, patient_status = :status, client_id = :client WHERE patient_id = :id";
	$query = $db->prepare($sql);

    $params = array(
        ':name' => $name,
        ':species' => $species,
        ':status' => $status,
        ':client' => $client,
        ':id' => $id);

    $query->execute($params);

	$db = null;
	
	return true;
}

function deletePatient($id = null)
{

	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
    $sql = "DELETE FROM patients WHERE patient_id=:id";
    $query = $db->prepare($sql);

        $params = array(':id' => $id);
    $query->execute($params);


	$db = null;

	return true;
}

function createpatient()
{
    $name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
    $species = isset($_POST['species_id']) ? $_POST['species_id'] : null;
    $client = isset($_POST['client_id']) ? $_POST['client_id'] : null;
    $status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;

    if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($client) == 0) {
        return false;
    }
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES (:name, :species, :client, :status)";
	$query = $db->prepare($sql);


    $params = array(
        ':name' => $name,
        ':species' => $species,
        ':client' => $client,
        ':status' => $status);

	$query->execute($params);

	$db = null;
    

	return true;
};
