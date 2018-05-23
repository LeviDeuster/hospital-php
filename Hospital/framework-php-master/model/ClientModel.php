<?php

function getClient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);

    $params = array(':id' => $id);
    $query->execute($params);



	$db = null;

	return $query->fetch();
}

function getAllClients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editClient()
{
	$firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	$id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname WHERE client_id = :id";
	$query = $db->prepare($sql);

    $params = array(
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':id' => $id);

    $query->execute($params);

	$db = null;
	
	return true;
}

function deleteClient($id = null)
{

	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
    $sql = "DELETE FROM clients WHERE client_id=:id";
    $query = $db->prepare($sql);

        $params = array(':id' => $id);
    $query->execute($params);


	$db = null;

	return true;
}

function createclient()
{
    $firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
    $lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_firstname, client_lastname) VALUES (:firstname, :lastname)";
	$query = $db->prepare($sql);

    $params = array(
        ':firstname' => $firstname,
        ':lastname' => $lastname);

	$query->execute($params);


    $db = null;
	
	return true;
};
